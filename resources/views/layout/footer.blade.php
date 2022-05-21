
{{-- WOW ANIMATION --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    new WOW().init();
</script>

{{-- SLIDER COUROSEL --}}
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js"></script>
<script>
    new Splide( '#splide1' ).mount();
</script>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

<script src="{{ URL('mainjs/main.js') }}"></script>
<script src="{{ asset('mainjs/app.js')  }}" ></script>
<script src="{{ asset('mainjs/delete.js')  }}" ></script>
<script src="{{ asset('mainjs/search.js')  }}" ></script>


</body>

</html>