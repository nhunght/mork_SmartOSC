@include('frontend.includes.head')

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '481402502038511',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

    @include('frontend.includes.topbar')

    @include('frontend.includes.navbar')

    @yield('content')

@include('frontend.includes.footer')
 <script type='text/javascript'>
    window._sbzq||function(e){e._sbzq=[];
    var t=e._sbzq;t.push(["_setAccount",25683]);
    var n=e.location.protocol=="https:"?"https:":"http:";
    var r=document.createElement("script");
    r.type="text/javascript";r.async=true;
    r.src=n+"//static.subiz.com/public/js/loader.js";
    var i=document.getElementsByTagName("script")[0];
    i.parentNode.insertBefore(r,i)}(window);
 </script> 
</body>

</html>