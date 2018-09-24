<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Frequently Ask Question</title>
        <meta name="description" content="Provides a very basic HTML multilingual support using JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://fonts.googleapis.com/css?family=Quattrocento+Sans:700' rel='stylesheet' type='text/css'>
        <!-- <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'> -->

        <style type="text/css">
                .head {
                  /* padding: 40px; */
                  width: 100%;
                  text-align: center;
                }

                h1,
                h2,
                h3,
                h4,
                h5,
                p,
                span,
                .lead {
                  text-rendering: optimizeLegibility;
                  -webkit-font-smoothing: antialiased;
                }

                h1,
                h2,
                h3,
                .lead {
                  font-weight: 100 !important;
                }

                .lead {
                  font-weight: 300 !important;
                }

                .animate, .as-accordion-close {
                  transition: -webkit-transform .2s ease-out;
                  transition: transform .2s ease-out;
                  transition: transform .2s ease-out, -webkit-transform .2s ease-out;
                }

                .accordion {
                  border-top: 1px solid #cdcdcd;
                }
                .accordion:nth-last-child(1) {
                  border-bottom: 1px solid #cdcdcd;
                }

                .as-accordion-head {
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  color: #333;
                  width: 100%;
                  padding: 25px 0;
                  cursor: pointer;
                }
                .as-accordion-head:hover {
                  color: #0070c9;
                }

                .as-accordion-title {
                  font-size: 25px;
                  line-height: 1.14286;
                  font-weight: 200;
                  letter-spacing: 0;
                }

                .as-accordion-close {
                  font-size: 50px;
                  font-weight: 100;
                  -webkit-transform: translateY(0px) rotate(45deg) scale(0.8);
                          transform: translateY(0px) rotate(45deg) scale(0.8);
                  line-height: 0;
                }
                .as-accordion-close.open {
                  -webkit-transform: translateX(-3px) translateY(-2px) rotate(0deg) scale(1);
                          transform: translateX(-3px) translateY(-2px) rotate(0deg) scale(1);
                }

                .as-accordion-collapse {
                  display: none;
                  padding-bottom: 40px;
                }


                /* BUTTON WITH IMAGE */
                .btn {
                  /* margin: 50px; */
                  /* padding: 10px; */
                  background: #000000;
                  border: 1px solid #000000;
                  border-radius: 5px 5px 5px 5px;
                  cursor: pointer;
                  transition: background .2s ease-in-out;
                }

                .btn:hover {
                  background: #4e4e4e;
                }

                .btn-icon {
                  width: 30px;
                  height: 30px;
                  display: block;
                  float: left;
                }

                .btn-icon img {
                  height: 100%;
                  width: 100%;
                }

                .btn-text {
                  color: white;
                  float: left;
                  height: 30px;
                  line-height: 30px;
                  margin-left: 5px;
                  text-shadow: 0 -1px 0px rgba(0, 0, 0, 0.25);
                }



        </style>


    </head>
    <body>

      <div>

        <nav id="nav" align="center">
          <!--
          <a class="example-shadow-2" href="#" title="Change current language to English" data-lang-ref="en">English</a>
          <a class="example-shadow-2" href="#" title="Remplacer les textes par leur version en Français" data-lang-ref="fr">Indonesia</a>
          -->
          <button class="btn" data-lang-ref="en">
            <span class="btn-icon">
              <img src="assets/images/country/united-kingdom.png" alt="" />
            </span>
            <span class="btn-text">English</span>
          </button>

          <button class="btn" data-lang-ref="fr">
            <span class="btn-icon">
              <img src="assets/images/country/indonesia.png" alt="" />
            </span>
            <span class="btn-text">Indonesia</span>
          </button>
        </nav>

      </div>

      <div class="container" style="padding-bottom:50px;">

          <div class="head">
            <h1 class="display-1">
              <div data-translatable>
                <span><strong>EN : </strong>Accordion like Apple</span>
                <span><strong>FR : </strong>Accordion like Apple</span>
              </div>
            </h1>
            <p class="lead">
              <div data-translatable>
                <span><strong>EN : </strong>In progress, check back in a few days..</span>
                <span><strong>FR : </strong>In progress, check back in a few days..</span>
              </div>
            </p>
          </div>

          <!-- Code -->

          <!-- #1 -->
          <div id="accordion" class="accordion">
            <!-- Head -->
            <div class="as-accordion-head">
              <span class="as-accordion-title">
              <div data-translatable>
                <span><strong>EN : </strong>Product information</span>
                <span><strong>FR : </strong>Product information</span>
              </div>
              </span>
              <span id="as-accordion-close" class="as-accordion-close" aria-hidden="true">&times;</span>
            </div>
            <!-- Body -->
            <div class="as-accordion-collapse" id="collapseExample">

              <div class="">
              <div data-translatable>
                <span><strong>EN : </strong>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</span>
                <span><strong>FR : </strong>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</span>
              </div>
              </div>
            </div>
          </div>

          <!-- #2 -->
          <div id="accordion" class="accordion">
            <!-- Head -->
            <div class="as-accordion-head">
              <span class="as-accordion-title">
              <div data-translatable>
                <span><strong>EN : </strong>Reviews</span>
                <span><strong>FR : </strong>Reviews</span>
              </div>
              </span>
              <span id="as-accordion-close" class="as-accordion-close" aria-hidden="true">&times;</span>
            </div>
            <!-- Body -->
            <div class="as-accordion-collapse" id="collapseExample">

              <div class="">
                <span><strong>EN : </strong>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</span>
                <span><strong>FR : </strong>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</span>
              </div>
            </div>
          </div>
        </div>


      <!--
      <div data-translatable>
          <span><strong>EN : </strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. !</span>
          <span><strong>INDONESIA : </strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
      </div>
      -->

      <script src="assets/js/dom-i18n.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
          var i18n = domI18n({
              selector: '[data-translatable]',
              separator: ' // ',
              languages: ['en', 'fr'],
              defaultLanguage: 'en',
              currentLanguage: 'en'
          });

          var nav = Array.prototype.slice.call(document.querySelectorAll('#nav > button'));

          nav.forEach(function (item) {
            item.onclick = function (e) {
              i18n.changeLanguage(this.getAttribute('data-lang-ref'));
              e.preventDefault();
            };
          });


          jQuery(document).ready(($) => {
            $('.as-accordion-head').click(function () {
              $(this).find('.as-accordion-close').toggleClass('open');
              $(this).next('.as-accordion-collapse').slideToggle('fast', () => {
                // Do something maybe .. 
              });
            });
          });


      </script>

    </body>
</html>