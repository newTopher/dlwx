<?php/** * Created by IntelliJ IDEA. * User: Topher * Date: 13-12-1 * Time: 上午11:29 * To change this template use File | Settings | File Templates. */class IndexController extends Controller{    public function __construct(){    }    public function actionIndex(){        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];        if (!empty($postStr)){            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);            $RX_TYPE = trim($postObj->MsgType);            switch($RX_TYPE){                case "text":                    $resultStr = $this->handleText($postObj);                    break;                case "event":                    $resultStr = $this->handleEvent($postObj);                    break;                default:                    $resultStr = "Unknow msg type: ".$RX_TYPE;                    break;            }            echo $resultStr;        }else {            echo "";            exit;        }    }    public function handleText($postObj){        $keyword = trim($postObj->Content);        if(!empty($keyword)){            $contentStr = "Welcome to wechat world!";            $this->responseText($postObj, $contentStr);        }else{            echo "Input something...";        }    }    public function handleEvent($object){        $contentStr = "";        switch ($object->Event)        {            case "subscribe":                $contentStr = "欢迎订阅";                break;            case "unsubscribe":                $contentStr = "谢谢关注";                break;            default :                $contentStr = "Unknow Event: ".$object->Event;                break;        }        $this->responseText($object, $contentStr);    }    public function responseText($object, $content){        $textTpl = "<xml>                    <ToUserName><![CDATA[%s]]></ToUserName>                    <FromUserName><![CDATA[%s]]></FromUserName>                    <CreateTime>%s</CreateTime>                    <MsgType><![CDATA[%s]]></MsgType>                    <Content><![CDATA[%s]]></Content>                    </xml>";        echo sprintf($textTpl, $object->FromUserName, $object->ToUserName, time(),$object->MsgType, $content);    }    public function responseImageText($object,$data){        $imageTpl = "<xml>                    <ToUserName><![CDATA[%s]]></ToUserName>                    <FromUserName><![CDATA[%s]]></FromUserName>                    <CreateTime>%s</CreateTime>                    <MsgType><![CDATA[%s]]></MsgType>                    <ArticleCount>%s</ArticleCount>                    <Articles>                    <item>                    <Title><![CDATA[%s]]></Title>                    <Description><![CDATA[%s]]></Description>                    <PicUrl><![CDATA[%s]]></PicUrl>                    <Url><![CDATA[%s]]></Url>                    </item>                    </Articles>                    </xml> ";        echo sprintf($imageTpl, $object->FromUserName, $object->ToUserName, time(),'news', 1,$data->title,            $data->description,$data->picurl,$data->url);    }    public function actionCreateMenu(){        $token = CJSON::decode($this->getToken());        $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$token['access_token'];        $data = '{     "button":[     {          "type":"click",          "name":"神人",          "key":"V1001_TODAY_MUSIC"      },      {           "type":"click",           "name":"大姑子",           "key":"V1001_TODAY_SINGER"      },      {           "name":"菜单",           "sub_button":[           {               "type":"view",               "name":"小小米",               "url":"http://www.soso.com/"            },            {               "type":"view",               "name":"咪咪小",               "url":"http://v.qq.com/"            },            {               "type":"click",               "name":"我是神",               "key":"V1001_GOOD"            }]       }] }';       echo $this->httpMethod($url,$data);    }    public function actionDelMenu(){        $token = CJSON::decode($this->getToken());        $url = "https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=".$token['access_token'];        echo $this->httpMethod($url,$data='');    }}