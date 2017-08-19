<?php
set_time_limit(0);
class httpRequestLib {
	protected $_useragent = array (
		'Mozilla/4.0 (compatible; MSIE 5.0; SunOS 5.10 sun4u; X11)',
		'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.2pre) Gecko/20100207 Ubuntu/9.04 (jaunty) Namoroka/3.6.2pre',
		'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Avant Browser;',
		'Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.0)',
		'Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1)',
		'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.6)',
		'Microsoft Internet Explorer/4.0b1 (Windows 95)',
		'Opera/8.00 (Windows NT 5.1; U; en)', 'amaya/9.51 libwww/5.4.0',
		'Mozilla/4.0 (compatible; MSIE 5.0; AOL 4.0; Windows 95; c_athome)',
		'Mozilla/4.0 (compatible; MSIE 5.5; Windows NT)',
		'Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.5 (like Gecko) (Kubuntu)',
		'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; ZoomSpider.net bot; .NET CLR 1.1.4322)',
		'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; QihooBot 1.0 qihoobot@qihoo.net)',
		'Mozilla/4.0 (compatible; MSIE 5.0; Windows ME) Opera 5.11 [en]',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.67 Safari/537.36',
		'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.67 Safari/537.36',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1944.0 Safari/537.36',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.47 Safari/537.36',
		'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36 Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.10',
		'Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1667.0 Safari/537.36',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1664.3 Safari/537.36',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1664.3 Safari/537.36',
		'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.16 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1623.0 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.17 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36',
		'Mozilla/5.0 (X11; CrOS i686 4319.74.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.2 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1468.0 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1467.0 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1464.0 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1500.55 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36',
		'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.90 Safari/537.36',
		'Mozilla/5.0 (X11; NetBSD) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36',
		'Mozilla/5.0 (X11; CrOS i686 3912.101.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.60 Safari/537.17',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1309.0 Safari/537.17',
		'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.15 (KHTML, like Gecko) Chrome/24.0.1295.0 Safari/537.15',
		'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.14 (KHTML, like Gecko) Chrome/24.0.1292.0 Safari/537.14',
		'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13',
		'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13',
		'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1284.0 Safari/537.13',
		'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.6 Safari/537.11',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.6 Safari/537.11',
		'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.26 Safari/537.11',
		'Mozilla/5.0 (Windows NT 6.0) yi; AppleWebKit/345667.12221 (KHTML, like Gecko) Chrome/23.0.1271.26 Safari/453667.1221',
		'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.17 Safari/537.11',
		'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_0) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.79 Safari/537.4',
		'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/22.0.1207.1 Safari/537.1',
		'Mozilla/5.0 (X11; CrOS i686 2268.111.0) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1092.0 Safari/536.6',
		'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1090.0 Safari/536.6',
		'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0',
		'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0',
		'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/29.0',
		'Mozilla/5.0 (X11; OpenBSD amd64; rv:28.0) Gecko/20100101 Firefox/28.0',
		'Mozilla/5.0 (X11; Linux x86_64; rv:28.0) Gecko/20100101 Firefox/28.0',
		'Mozilla/5.0 (Windows NT 6.1; rv:27.3) Gecko/20130101 Firefox/27.3',
		'Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:27.0) Gecko/20121011 Firefox/27.0',
		'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/25.0',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:25.0) Gecko/20100101 Firefox/25.0',
		'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:24.0) Gecko/20100101 Firefox/24.0',
		'Mozilla/5.0 (Windows NT 6.0; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:24.0) Gecko/20100101 Firefox/24.0',
		'Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/23.0',
		'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20130406 Firefox/23.0',
		'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:23.0) Gecko/20131011 Firefox/23.0',
		'Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/22.0',
		'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:22.0) Gecko/20130328 Firefox/22.0',
		'Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20130405 Firefox/22.0',
		'Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1',
		'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1',
		'Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:21.0.0) Gecko/20121011 Firefox/21.0.0',
		'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20130331 Firefox/21.0',
		'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0',
		'Mozilla/5.0 (X11; Linux i686; rv:21.0) Gecko/20100101 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130401 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130328 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130401 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130331 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0',
		'Mozilla/5.0 (Windows NT 5.0; rv:21.0) Gecko/20100101 Firefox/21.0',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:21.0) Gecko/20100101 Firefox/21.0',
		'Mozilla/5.0 (compatible; MSIE 10.6; Windows NT 6.1; Trident/5.0; InfoPath.2; SLCC1; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 2.0.50727) 3gpp-gba UNTRUSTED/1.0',
		'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)',
		'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)',
		'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)',
		'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/4.0; InfoPath.2; SV1; .NET CLR 2.0.50727; WOW64)',
		'Mozilla/5.0 (compatible; MSIE 10.0; Macintosh; Intel Mac OS X 10_7_3; Trident/6.0)',
		'Mozilla/4.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)',
		'Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)',
		'Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))',
		'Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; InfoPath.3; MS-RTC LM 8; .NET4.0C; .NET4.0E)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; chromeframe/12.0.742.112)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; Tablet PC 2.0; InfoPath.3; .NET4.0C; .NET4.0E)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; yie8)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET CLR 1.1.4322; .NET4.0C; Tablet PC 2.0)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/13.0.782.215)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/11.0.696.57)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0) chromeframe/10.0.648.205',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.1; SV1; .NET CLR 2.8.52393; WOW64; en-US)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)',
		'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)'
	);
	protected $_socks = 'nul';
	protected $_usragentmanual;
	protected $_url;
	protected $_followlocation;
	protected $_timeout;
	protected $_maxRedirects;
	protected $_cookieFileLocation = './cookie.txt';
	protected $_postFields;
	protected $_referer ="http://google.com";
	protected $_session;
	protected $_webpage;
	protected $_includeHeader;
	protected $_noBody;
	protected $_status;
	protected $_binaryTransfer;
	protected $_header;
	public    $authentication = false;
	public    $auth_name      = '';
	public    $auth_pass      = '';
	public 	  $_post;
	public    $_debug = false;
	public    $last_info = '';
	public function useAuth($use)
	{
		$this->authentication = $use;
	}

	public function setName($name)
	{
		$this->auth_name = $name;
	}

	public function setPass($pass)
	{
		$this->auth_pass = $pass;
	}

	public function __construct($url,$followlocation = true,$timeOut = 30,$maxRedirecs = 4,$binaryTransfer = false,$includeHeader = false,$noBody = false)
	{
		$this->_url = $url;
		$this->_followlocation = $followlocation;
		$this->_timeout = $timeOut;
		$this->_maxRedirects = $maxRedirecs;
		$this->_noBody = $noBody;
		$this->_includeHeader = $includeHeader;
		$this->_binaryTransfer = $binaryTransfer;
		$this->_usragentmanual = 'nul';
		$this->_socks = 'nul';
		$this->followheader = false;
		$this->_header = array();
		$this->_cookieFileLocation = dirname(__FILE__).'/cookies/cookie.txt';
	}

	public function setReferer($referer)
	{
		$this->_referer = $referer;
	}

	public function setCookiFileLocation($path)
	{
		$this->_cookieFileLocation = $path;
	}

	public function setPost ($postFields, $build = true)
	{
		$this->_post = true;
		if($build)
			$this->_postFields = http_build_query($postFields);
		else
			$this->_postFields = $postFields;
	}

	public function setSocks5($s)
	{
		$this->_socks = $s;
	}
	public function addHeader($hdr)
	{
		$this->_header[] = $hdr;
	}
	public function setUserAgent($userAgent)
	{
		$this->_usragentmanual = $userAgent;
	}
	private function initCurl($hasHeader = false, $hasBody = true)
	{
		$s = curl_init();
		curl_setopt($s, CURLOPT_ENCODING , "gzip");
		curl_setopt($s, CURLOPT_URL,$this->_url);
		curl_setopt($s, CURLOPT_HTTPHEADER, $this->_header);
		curl_setopt($s, CURLOPT_TIMEOUT,$this->_timeout);
		curl_setopt($s, CURLOPT_MAXREDIRS,$this->_maxRedirects);
        curl_setopt($s, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($s, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($s, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($s, CURLOPT_BINARYTRANSFER, true);
		curl_setopt($s, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($s, CURLOPT_COOKIEJAR,$this->_cookieFileLocation);
		curl_setopt($s, CURLOPT_COOKIEFILE,$this->_cookieFileLocation);
		curl_setopt($s, CURLOPT_HEADER, $hasHeader ? 1 : 0);
		curl_setopt($s, CURLOPT_NOBODY, $hasBody ? 0 : 1);

		if($this->authentication)
			curl_setopt($s, CURLOPT_USERPWD, $this->auth_name.':'.$this->auth_pass);

		if($this->_includeHeader)
			curl_setopt($s,CURLOPT_HEADER,true);

		if ($this->_usragentmanual != 'nul')
			curl_setopt($s,CURLOPT_USERAGENT,$this->_usragentmanual);
		else //random useragent
			curl_setopt($s,CURLOPT_USERAGENT,$this->_useragent[rand(0,count($this->_useragent)-1)]);
		if($this->_socks != 'nul')
		{
			curl_setopt($s, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
			curl_setopt($s, CURLOPT_PROXY, $this->_socks);
		}
		curl_setopt($s,CURLOPT_REFERER,$this->_referer);
		return $s;

	}
	public function saveCURLInfo($s)
	{
		$this->last_info['connect_time'] = curl_getinfo($s, CURLINFO_CONNECT_TIME);
		$this->last_info['total_time'] = curl_getinfo($s, CURLINFO_TOTAL_TIME);
		$this->last_info['speed_download'] = curl_getinfo($s, CURLINFO_SPEED_DOWNLOAD);
		$this->last_info['speed_upload'] = curl_getinfo($s, CURLINFO_SPEED_UPLOAD);
		$this->last_info['http_code'] = curl_getinfo($s, CURLINFO_HTTP_CODE);
		$this->last_info['local_ip'] = curl_getinfo($s, CURLINFO_LOCAL_IP);

	}
	public function doPut($putdata ,$encdata = true, $url = 'nul',$hasHeader = false, $hasBody = true)
	{
		if($url != 'nul')
			$this->_url = $url;
		$s = $this->initCurl($hasHeader,$hasBody);
		curl_setopt($s, CURLOPT_CUSTOMREQUEST, "PUT");
		if($encdata)
			curl_setopt($s, CURLOPT_POSTFIELDS,http_build_query($putdata));
		else
			curl_setopt($s, CURLOPT_POSTFIELDS,$putdata);
		$this->_webpage = curl_exec($s);
		$this->_status = curl_getinfo($s,CURLINFO_HTTP_CODE);
		if($this->_debug)
		{
			var_dump($this->_status);
			var_dump($this->_webpage);
		}
		$this->saveCURLInfo($s);
		curl_close($s);
		return $this->_webpage;

	}
	public function doGet($url = 'nul',$hasHeader = false, $hasBody = true)
	{
		if($url != 'nul')
			$this->_url = $url;
		$s = $this->initCurl($hasHeader,$hasBody);
		$this->_webpage = curl_exec($s);
		$this->_status = curl_getinfo($s,CURLINFO_HTTP_CODE);
		if($this->_debug)
		{
			var_dump($this->_status);
			var_dump($this->_webpage);
		}
		$this->saveCURLInfo($s);
		curl_close($s);
		return $this->_webpage;
	}
	public function doPost($postdata, $encdata = true, $url = 'nul', $hasHeader = false, $hasBody = true)
	{
		if($url != 'nul')
			$this->_url = $url;
		$s = $this->initCurl($hasHeader,$hasBody);
		curl_setopt($s,CURLOPT_POST,true);
		if($encdata)
			curl_setopt($s,CURLOPT_POSTFIELDS,http_build_query($postdata));
		else
			curl_setopt($s,CURLOPT_POSTFIELDS,$postdata);
		$this->_webpage = curl_exec($s);
		$this->_status = curl_getinfo($s,CURLINFO_HTTP_CODE);
		if($this->_debug)
		{
			var_dump($this->_status);
			var_dump($this->_webpage);
		}

		$this->saveCURLInfo($s);
		curl_close($s);
		return $this->_webpage;
	}
	public function doRequest($url = 'nul',$hasHeader = false, $hasBody = true)
	{
		if($url != 'nul')
			$this->_url = $url;
		$s = $this->initCurl($hasHeader,$hasBody);
		if($this->_post)
		{
			curl_setopt($s,CURLOPT_POST,true);
			curl_setopt($s,CURLOPT_POSTFIELDS,$this->_postFields);
		}
		$this->_webpage = curl_exec($s);
		$this->_status = curl_getinfo($s,CURLINFO_HTTP_CODE);
		if($this->_debug)
		{
			var_dump($this->_status);
			var_dump($this->_webpage);
		}

		$this->saveCURLInfo($s);
		curl_close($s);

		return $this->_webpage;
	}

	public function getHttpStatus()
	{
		return $this->_status;
	}

	public function getResponse()
	{
		return $this->_webpage;
	}
	public function setTimeOut($timeout) //seconds
	{
		$this->_timeout = $timeout;
	}
	public function saveResult($fname)
	{
		$f = fopen($fname, 'w');
		fwrite($f, $this->_webpage."\n");
		fclose($f);
	}
}
?>