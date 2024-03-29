<x-app-layout>
  @include('header2')
  <!DOCTYPE html>
  <html style="font-size: 16px;">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Teaching and learning methods">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>course-sepcs4</title>
    <link rel="stylesheet" href="{{url('css/nicepage4.css')}}" media="screen">
    <link rel="stylesheet" href="{{url('css/specs4.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{url('js/jquery3.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{url('js/nicepage3.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 4.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">
      {
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "../../public/images/logo.png"
}
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="course-sepcs4">
    <meta property="og:type" content="website">
  </head>
  </header>

  <body class="u-body u-xl-mode">

    <section class="u-border-15 u-border-grey-75 u-clearfix u-section-1" id="sec-2845">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div
          class="u-align-center u-border-2 u-border-grey-75 u-container-style u-grey-70 u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-text u-text-default u-text-1">
              <b>Teaching and learning methods</b>
            </h2>
          </div>
        </div>
        <h3 class="u-text u-text-default u-text-2">
          <b> -&nbsp;</b><b>Teaching and learning methods</b>
        </h3>
        <div class="u-form u-form-1">
          <form action="http://127.0.0.1:8000/specs4/savemethods" method="POST"
            class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" source="custom" name="form"
            style="padding: 10px">
            <div class="u-form-group u-form-textarea u-form-group-1">

              <input type="checkbox" name="spec1" value="lectures"> lectures <br />
              <input type="checkbox" name="spec2" value="assignments"> assignments <br />
              <input type="checkbox" name="spec3" value="Synchronized_and_Hybrid_learning"> Synchronized and Hybrid
              learning <br />
              <input type="checkbox" name="spec4" value="Computer_laboratory"> Computer laboratory<br />
              <input type="checkbox" name="spec5" value="Online"> Online <br /><br />
              <label for="textarea-c3fb" class="u-form-control-hidden u-label"></label>

              <input type="submit" value="submit" style="float:right "
                class=" u-border-none u-btn u-button-style u-grey-75 u-hover-grey-90 ">



              {{-- <textarea rows="5" cols="50" id="textarea-c3fb" name="textarea"
                class="u-border-2 u-border-grey-75 u-input u-input-rectangle u-palette-5-light-2 u-radius-6 u-input-1"
                required="" placeholder="Methods"></textarea> --}}
              {{--
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a type="submit" name="submit"
                class="u-border-none u-btn u-button-style u-grey-75 u-hover-grey-90 u-btn-2">Submit</a>
            </div> --}}
            {{-- <div class="u-form-send-message u-form-send-success">
              Thank you! Your message has been sent.
            </div> --}}
            {{-- <div class="u-form-send-error u-form-send-message">
              Unable to send your message. Please fix errors then try again.
            </div>
            <input type="hidden" value="" name="recaptchaResponse" /> --}}
          </form>
        </div>
        {{-- <a href={{url('specs5')}}
          class="u-border-none u-btn u-button-style u-grey-75 u-hover-grey-90 u-btn-2">Submit</a> --}}
      </div>
    </section>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9d69">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-left u-large-text u-text u-text-variant u-text-1">
          Copyright © MIU 2021. All rights reserved.<br />
        </p>
        <h5 class="u-align-left u-text u-text-2"></h5>
      </div>
    </footer>
  </body>

  </html>
</x-app-layout>