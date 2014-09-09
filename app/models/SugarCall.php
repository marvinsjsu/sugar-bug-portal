<?php

class SugarCall {
  private $base_url = "https://znqarg5692.trial.sugarcrm.com/rest/v10";
  private $username = "marvinsjsu";
  private $password = "A12Pac559211";
  private $token;

  function __construct(){
    $this->token = $this->authenticate();
  }

  function authenticate() {
    $url = $this->base_url . "/oauth2/token";

    $oauth2_token_arguments = array(
        "grant_type" => "password",
        "client_id" => "sugar",
        "client_secret" => "",
        "username" => $this->username,
        "password" => $this->password,
        "platform" => "base"
    );

    return $this->call($url, '', 'POST', $oauth2_token_arguments);
  }

  public function getBugs() {
    $url = $this->base_url . "/Bugs/";
    $filter_arguments = array(
        "max_num" => 100,
        "offset" => 0,
    );

    $bugs_decoded = $this->call($url, $this->token->access_token, 'GET', $filter_arguments);
    return json_encode($bugs_decoded);
  }

  public function getBug($id) {
    $url = $this->base_url . "/Bugs/" . $id;
    $bugs_decoded = $this->call($url, $this->token->access_token, 'GET');
    return json_encode($bugs_decoded);
  }

  public function createBug($options) {
    $url = $this->base_url . "/Bugs/";
    $record_arguments = array(
        "name" => $options["subject"],
        "status" => $options["status"],
        "priority" => $options["priority"],
        "type" => $options["type"],
        "product_category" => $options["category"],
        "resolution" => $options["resolution"],
        "description" => $options["description"]
    );

    $record_response = $this->call($url, $this->token->access_token, 'POST', $record_arguments);
  }

  //copy-and-pasted from example provided @ http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/Sugar_Developer_Guide_7.2/70_API/Web_Services/20_Examples/v10/module_filter_GET/

  function call($url, $oauthtoken='', $type, $arguments=array(), $encodeData=true, $returnHeaders=false) {
    $type = strtoupper($type);

     if ($type == 'GET')
     {
         $url .= "?" . http_build_query($arguments);
     }

     $curl_request = curl_init($url);

     if ($type == 'POST')
     {
         curl_setopt($curl_request, CURLOPT_POST, 1);
     }
     elseif ($type == 'PUT')
     {
         curl_setopt($curl_request, CURLOPT_CUSTOMREQUEST, "PUT");
     }
     elseif ($type == 'DELETE')
     {
         curl_setopt($curl_request, CURLOPT_CUSTOMREQUEST, "DELETE");
     }

     curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
     curl_setopt($curl_request, CURLOPT_HEADER, $returnHeaders);
     curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

     if (!empty($oauthtoken))
     {
         $token = array("oauth-token: {$oauthtoken}");
         curl_setopt($curl_request, CURLOPT_HTTPHEADER, $token);
     }

     if (!empty($arguments) && $type !== 'GET')
     {
         if ($encodeData)
         {
             //encode the arguments as JSON
             $arguments = json_encode($arguments);
         }
         curl_setopt($curl_request, CURLOPT_POSTFIELDS, $arguments);
     }

     $result = curl_exec($curl_request);

     if ($returnHeaders)
     {
         //set headers from response
         list($headers, $content) = explode("\r\n\r\n", $result ,2);
         foreach (explode("\r\n",$headers) as $header)
         {
             header($header);
         }
         //return the nonheader data
         return trim($content);
     }

     curl_close($curl_request);
     //decode the response from JSON
     $response = json_decode($result);

     return $response;
  }

}
?>