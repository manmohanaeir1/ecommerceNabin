<title>{{ isset($generalSetting->site_title)?$generalSetting->site_title:''}} </title>
<meta name="description" content="{!!  substr((isset($generalSetting->site_desc)?$generalSetting->site_desc:''),0,200) !!}">
<meta name="keywords" content="{{ isset($generalSetting->site_keyword)?$generalSetting->site_keyword:"" }}">
<meta property="og:image" content="{{ asset(isset($generalSetting->page_banner)?asset('web/general_settings/'.$generalSetting->page_banner):'') }}">
<meta name="copyright" content="{{isset($generalSetting->site_title)?$generalSetting->site_title:''}}">
<meta name="author" content="{{$generalSetting->created_by_name}}"/>
<meta name="application-name" content="{{isset($generalSetting->site_title)?$generalSetting->site_title:''}}">

<!--Facebook Tags-->
<meta property="og:site_name" content="{{isset($generalSetting->site_title)?$generalSetting->site_title:''}}">
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{ request()->fullUrl() }}"/>
<meta property="og:title" content="{{ isset($generalSetting->site_title)?$generalSetting->site_title:'' }}"/>
<meta property="og:description" content="{!!  substr((isset($generalSetting->site_desc)?$generalSetting->site_desc:''),0,200) !!}"/>
<meta property="og:image" content="{{ asset(isset($generalSetting->page_banner)?asset('web/general_settings/'.$generalSetting->page_banner):'') }}"/>
<meta property="article:author" content="{{$generalSetting->created_by_name}}"/>
<meta property="og:locale" content="{{isset($contact_info->address)?$contact_info->address:''}}"/>

<!--Twitter Tags-->
<meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="{{isset($generalSetting->site_title)?$generalSetting->site_title:''}}"/>
<meta name="twitter:title" content="{{ isset($generalSetting->site_title)?$generalSetting->site_title:'' }}"/>
<meta name="twitter:description" content="{!!  substr((isset($generalSetting->site_desc)?$generalSetting->site_desc:''),0,200) !!}"/>
<meta name="twitter:image" content="{{ asset(isset($generalSetting->page_banner)?asset('web/general_settings/'.$generalSetting->page_banner):'') }}"/>