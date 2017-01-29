<?php
require_once dirname(__FILE__)."/../../src/pfci18n.class.php";
require_once dirname(__FILE__)."/../../src/pfcuserconfig.class.php";
require_once dirname(__FILE__)."/../../src/pfcproxycommand.class.php";

class pfcProxyCommand_myproxy extends pfcProxyCommand
{
  function run(&$xml_reponse, $p)
  {
    $clientid    = $p["clientid"];
    $param       = $p["param"];
    $sender      = $p["sender"];
    $recipient   = $p["recipient"];
    $recipientid = $p["recipientid"];   
    $c =& $this->c;
    $u =& $this->u;

    $cmdtocheck = array("send", "me");
    if ( in_array($this->name, $cmdtocheck) )
    {
      // Modify the text
      $param = "[this text is prepend by 'demo48_custom_proxy/myproxy.class.php'] ".$param;
    }

    // forward the command to the next proxy or to the final command
    $p["clientid"]    = $clientid;
    $p["param"]       = $param;
    $p["sender"]      = $sender;
    $p["recipient"]   = $recipient;
    $p["recipientid"] = $recipientid;
    $this->next->run($xml_reponse, $p);
  }
}

?>