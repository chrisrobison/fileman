```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://cdr2.com/crblog/home.html" />
    <title>Welcome To Christopher Robison's Site</title>
    <link rel="stylesheet" href="/crblog/assets/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="/crblog/assets/img/explosion.css">
    <link rel="stylesheet" href="/crblog/assets/css/home2.css">
    <!--link rel='stylesheet' href='sleigh.css' /-->
    <script src="/crblog/assets/fontawesome-free-6.4.0-web/js/all.min.js"></script>
    <script src="/crblog/assets/js/confetti.js"></script>
<style>
#ufo-button {
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0.749 -0.964 326.478 204.372' xmlns='http://www.w3.org/2000/svg' xmlns:bx='https://boxy-svg.com'%3E%3Cdefs%3E%3ClinearGradient gradientUnits='userSpaceOnUse' x1='249.999' y1='190.874' x2='249.999' y2='324.552' id='gradient-0'%3E%3Cstop offset='0' style='stop-color: rgb(79.608%25 79.608%25 79.608%25)'%3E%3C/stop%3E%3Cstop offset='1' style='stop-color: rgb(45.659%25 45.659%25 45.659%25)'%3E%3C/stop%3E%3C/linearGradient%3E%3Cbx:guide x='65.017' y='-0.964' angle='90'%3E%3C/bx:guide%3E%3Cbx:guide x='0.749' y='-12.532' angle='0'%3E%3C/bx:guide%3E%3C/defs%3E%3Cg transform='matrix(1, 0, 0, 1, -88.046237, -136.8895)'%3E%3Cellipse style='stroke: rgb(0, 0, 0); stroke-width: 15px; fill: url(%23gradient-0);' cx='249.999' cy='257.713' rx='149.743' ry='66.839'%3E%3C/ellipse%3E%3Cpath d='M 324.908 227.9 C 324.908 227.9 308.046 255.142 247.751 253.214 C 187.456 251.286 175.45 229.113 175.45 229.113 C 175.45 175.648 213.163 147.172 250.964 147.172 C 288.765 147.172 326.193 178.291 324.908 227.9 Z' style='stroke: rgb(0, 0, 0); stroke-width: 15px; fill: rgb(231, 231, 231);'%3E%3C/path%3E%3Cellipse style='stroke: rgb(0, 0, 0);' cx='162.918' cy='265.844' rx='12.532' ry='12.532'%3E%3C/ellipse%3E%3Cellipse style='stroke: rgb(0, 0, 0);' cx='249.629' cy='290.859' rx='12.483' ry='12.483'%3E%3C/ellipse%3E%3Cellipse style='stroke: rgb(0, 0, 0);' cx='337.472' cy='265.844' rx='12.532' ry='12.532'%3E%3C/ellipse%3E%3C/g%3E%3C/svg%3E");
    background-size: contain;
    background-repeat: no-repeat;
    display: inline-block;
    position: absolute;
    top: 1rem;
    left: 3rem;
    height: 25px;
    width: 80px;

}
</style>
</head>

<body>
    <div class="container">
        <div class="container-wrap">
            <a href="#" onclick="doUFO();return false;" id="ufo-button"></a>
            <div class="hero">
                <button onclick="togglePause();return false;" id="pause" class="playing"><i class="fa-regular fa-circle-pause"></i><i class="fa-regular fa-circle-play"></i></button>
                <h1>Chris Robison Knows</h1>
                <h1 class="type"><span class="txt-type" data-wait="3000" data-words='["Technology.","What, How & When.", "Programming.","Internet.","Servers.","Microservices.","Management.","Business Priorities.","Solutions."]'></span>
                </h1>
                <h2>Welcome To My Website</h2>
                <div style="height:80%;"></div>
            </div>
            <div class="indicator"><a href="#more"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <path fill="#ccc" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                    </svg></a></div>
        </div>
        <div style="display: block" class="wrapper">
            <a name="more"></a>
            <section class="blog">
                <h1>Blog Posts</h1>
                <div id="blog-preview">
                    <div class='scroll-btn' id='scroll-left'><i class="fa-solid fa-caret-left"></i></div>
                    <div id='blog-scroller' class='scroller'>
                        <ul id='blog-scroll' class='horiz-scroll'></ul>
                    </div>
                    <div class='scroll-btn' id='scroll-right'><i class="fa-solid fa-caret-right"></i></div>
                </div>
            </section>
            <section class="fun">
                <h1>Distractions</h1>
                <div class="fun-preview">
                    <div class='scroll-btn scroll-left' id='fun-scroll-left'><i class="fa-solid fa-caret-left"></i></div>
                    <div class='fun-scroller'>
                        <ul id='fun-scroll' class='horiz-scroll'> </ul>
                    </div>
                    <div class='scroll-btn scroll-right' id='fun-scroll-right'><i class="fa-solid fa-caret-right"></i></div>
                </div>
            </section>
            <section class="contact">
                <h1>Contact</h1>
                <p id="contact-preview" style="height:min-content;">
                    <iframe src="contact.html" id="contact" style="width: 100%; height:40rem;"></iframe>
                </p>
            </section>
        </div>
        <!--div id="vidbg">
  <svg viewBox="0 0 1920 1080" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
   <defs>
    <clipPath id="cut-off-bottom">
      <rect x="0" y="670" width="1920" height="1080" />
    </clipPath>
  </defs>


  <filter id="displacementFilter">
    <feTurbulence type="turbulence" baseFrequency="0.01 .1"
        numOctaves="1" result="turbulence" seed="53"/>
    <feDisplacementMap in2="turbulence" in="SourceGraphic"
        scale="50" xChannelSelector="R" yChannelSelector="B"/>
  </filter>
<image id="blueMoon" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://qt.exploratorium.edu/roofcam/Observatory/image.jpg?t=1" width="1920" height="1080"></image>
  <use xlink:href ="#blueMoon" x="-10"  transform="translate(0, 0) scale(1 1) " clip-path="url(#cut-off-bottom)" filter="url(#displacementFilter)"/>
</svg>
  </div-->
        <!-- old url: https://w3.mp.lura.live/player/prod/v3/anvload.html?key=eyJhbnZhY2siOiI1VkQ2RXlkNmRqZXdiQ21Od0JGbnNKajE3WUF2R1J3bCIsImV4cGVjdFByZXJvbGwiOnRydWUsImV4cGVjdFByZXJvbGxUaW1lb3V0Ijo1LCJodG1sNSI6dHJ1ZSwibSI6ImNicyIsInBsdWdpbnMiOnsiY29tc2NvcmUiOnsiYzMiOiJzYW5mcmFuY2lzY28uY2JzbG9jYWwuY29tIiwiY2xpZW50SWQiOiIzMDAwMDIzIn0sImRmcCI6eyJjbGllbnRTaWRlIjp7ImFkVGFnVXJsIjoiaHR0cDovL3B1YmFkcy5nLmRvdWJsZWNsaWNrLm5ldC9nYW1wYWQvYWRzP3N6PTJ4Mlx1MDAyNml1PS80MTI4L2Nicy5zZlx1MDAyNmNpdV9zenNcdTAwMjZpbXBsPXNcdTAwMjZnZGZwX3JlcT0xXHUwMDI2ZW52PXZwXHUwMDI2b3V0cHV0PXhtbF92YXN0Mlx1MDAyNnVudmlld2VkX3Bvc2l0aW9uX3N0YXJ0PTFcdTAwMjZ1cmw9W3JlZmVycmVyX3VybF1cdTAwMjZkZXNjcmlwdGlvbl91cmw9W2Rlc2NyaXB0aW9uX3VybF1cdTAwMjZjb3JyZWxhdG9yPVt0aW1lc3RhbXBdIiwia2V5VmFsdWVzIjp7ImNhdGVnb3JpZXMiOiJbW0NBVEVHT1JJRVNdXSIsInByb2dyYW0iOiJbW1BST0dSQU1fTkFNRV1dIiwic2l0ZVNlY3Rpb24iOiJ2aWRlby1leHBlcmllbmNlIn19fSwiaGVhcnRiZWF0QmV0YSI6eyJhY2NvdW50IjoiY2JzbG9jYWwtZ2xvYmFsLXVuaWZpZWQiLCJjaGFwdGVyVHJhY2tpbmciOmZhbHNlLCJjdXN0b21NZXRhZGF0YSI6eyJ2aWRlbyI6eyJjYnNfbWFya2V0Ijoic2FuZnJhbmNpc2NvLmNic2xvY2FsLmNvbSIsImNic19wbGF0Zm9ybSI6ImRlc2t0b3AifX0sImN1c3RvbVRyYWNraW5nU2VydmVyIjoiY2JzZGlnaXRhbG1lZGlhLmQxLnNjLm9tdHJkYy5uZXQiLCJjdXN0b21UcmFja2luZ1NlcnZlclNlY3VyZSI6ImNic2RpZ2l0YWxtZWRpYS5kMS5zYy5vbXRyZGMubmV0Iiwiam9iSWQiOiJzY192YSIsIm1hcmtldGluZ0Nsb3VkSWQiOiI4MjNCQTAzMzU1Njc0OTdGN0YwMDAxMDFAQWRvYmVPcmciLCJwSW5zdGFuY2UiOiJwMCIsInByb2ZpbGUiOiJjYnMiLCJwdWJsaXNoZXJJZCI6ImNic2xvY2FsIiwidHJhY2tpbmdTZXJ2ZXIiOiJjYnNkaWdpdGFsbWVkaWEuaGIub210cmRjLm5ldCIsInZlcnNpb24iOiIxLjUifSwibW9hdCI6eyJjbGllbnRTaWRlIjp7InBhcnRuZXJDb2RlIjoiY2JzbG9jYWxhbnZhdG92aWRlbzE4MTczMjYwOTQzMSJ9fX0sInRva2VuIjoiZGVmYXVsdCIsInYiOiJjNTEwIn0 -->
        <!--iframe id="vidbg" style="scale:1.3;" src="https://w3.mp.lura.live/player/prod/v3/anvload.html?key=eyJtIjoiY2JzIiwidiI6ImM1MTAiLCJhbnZhY2siOiI1VkQ2RXlkNmRqZXdiQ21Od0JGbnNKajE3WUF2R1J3bCIsInNoYXJlTGluayI6Imh0dHBzOi8vdzMubXAubHVyYS5saXZlL3BsYXllci9wcm9kL3YzL2FudmxvYWQuaHRtbD9rZXk9ZXlKaGJuWmhZMnNpT2lJMVZrUTJSWGxrTm1ScVpYZGlRMjFPZDBKR2JuTkthakUzV1VGMlIxSjNiQ0lzSW1WNGNHVmpkRkJ5WlhKdmJHd2lPblJ5ZFdVc0ltVjRjR1ZqZEZCeVpYSnZiR3hVYVcxbGIzVjBJam8xTENKb2RHMXNOU0k2ZEhKMVpTd2liU0k2SW1OaWN5SXNJbkJzZFdkcGJuTWlPbnNpWTI5dGMyTnZjbVVpT25zaVl6TWlPaUp6WVc1bWNtRnVZMmx6WTI4dVkySnpiRzlqWVd3dVkyOXRJaXdpWTJ4cFpXNTBTV1FpT2lJek1EQXdNREl6SW4wc0ltUm1jQ0k2ZXlKamJHbGxiblJUYVdSbElqcDdJbUZrVkdGblZYSnNJam9pYUhSMGNEb3ZMM0IxWW1Ga2N5NW5MbVJ2ZFdKc1pXTnNhV05yTG01bGRDOW5ZVzF3WVdRdllXUnpQM042UFRKNE1seDFNREF5Tm1sMVBTODBNVEk0TDJOaWN5NXpabHgxTURBeU5tTnBkVjl6ZW5OY2RUQXdNalpwYlhCc1BYTmNkVEF3TWpablpHWndYM0psY1QweFhIVXdNREkyWlc1MlBYWndYSFV3TURJMmIzVjBjSFYwUFhodGJGOTJZWE4wTWx4MU1EQXlOblZ1ZG1sbGQyVmtYM0J2YzJsMGFXOXVYM04wWVhKMFBURmNkVEF3TWpaMWNtdzlXM0psWm1WeWNtVnlYM1Z5YkYxY2RUQXdNalprWlhOamNtbHdkR2x2Ymw5MWNtdzlXMlJsYzJOeWFYQjBhVzl1WDNWeWJGMWNkVEF3TWpaamIzSnlaV3hoZEc5eVBWdDBhVzFsYzNSaGJYQmRJaXdpYTJWNVZtRnNkV1Z6SWpwN0ltTmhkR1ZuYjNKcFpYTWlPaUpiVzBOQlZFVkhUMUpKUlZOZFhTSXNJbkJ5YjJkeVlXMGlPaUpiVzFCU1QwZFNRVTFmVGtGTlJWMWRJaXdpYzJsMFpWTmxZM1JwYjI0aU9pSjJhV1JsYnkxbGVIQmxjbWxsYm1ObEluMTlmU3dpYUdWaGNuUmlaV0YwUW1WMFlTSTZleUpoWTJOdmRXNTBJam9pWTJKemJHOWpZV3d0WjJ4dlltRnNMWFZ1YVdacFpXUWlMQ0pqYUdGd2RHVnlWSEpoWTJ0cGJtY2lPbVpoYkhObExDSmpkWE4wYjIxTlpYUmhaR0YwWVNJNmV5SjJhV1JsYnlJNmV5SmpZbk5mYldGeWEyVjBJam9pYzJGdVpuSmhibU5wYzJOdkxtTmljMnh2WTJGc0xtTnZiU0lzSW1OaWMxOXdiR0YwWm05eWJTSTZJbVJsYzJ0MGIzQWlmWDBzSW1OMWMzUnZiVlJ5WVdOcmFXNW5VMlZ5ZG1WeUlqb2lZMkp6WkdsbmFYUmhiRzFsWkdsaExtUXhMbk5qTG05dGRISmtZeTV1WlhRaUxDSmpkWE4wYjIxVWNtRmphMmx1WjFObGNuWmxjbE5sWTNWeVpTSTZJbU5pYzJScFoybDBZV3h0WldScFlTNWtNUzV6WXk1dmJYUnlaR011Ym1WMElpd2lhbTlpU1dRaU9pSnpZMTkyWVNJc0ltMWhjbXRsZEdsdVowTnNiM1ZrU1dRaU9pSTRNak5DUVRBek16VTFOamMwT1RkR04wWXdNREF4TURGQVFXUnZZbVZQY21jaUxDSndTVzV6ZEdGdVkyVWlPaUp3TUNJc0luQnliMlpwYkdVaU9pSmpZbk1pTENKd2RXSnNhWE5vWlhKSlpDSTZJbU5pYzJ4dlkyRnNJaXdpZEhKaFkydHBibWRUWlhKMlpYSWlPaUpqWW5Oa2FXZHBkR0ZzYldWa2FXRXVhR0l1YjIxMGNtUmpMbTVsZENJc0luWmxjbk5wYjI0aU9pSXhMalVpZlN3aWJXOWhkQ0k2ZXlKamJHbGxiblJUYVdSbElqcDdJbkJoY25SdVpYSkRiMlJsSWpvaVkySnpiRzlqWVd4aGJuWmhkRzkyYVdSbGJ6RTRNVGN6TWpZd09UUXpNU0o5Zlgwc0luUnZhMlZ1SWpvaVpHVm1ZWFZzZENJc0luWWlPaUpqTlRFd0luMCIsInBsdWdpbnMiOnsiY29tc2NvcmUiOnsiYzMiOiJzYW5mcmFuY2lzY28uY2JzbG9jYWwuY29tIiwiY2xpZW50SWQiOiIzMDAwMDIzIn0sImRmcCI6eyJjbGllbnRTaWRlIjp7ImFkVGFnVXJsIjoiaHR0cDovL3B1YmFkcy5nLmRvdWJsZWNsaWNrLm5ldC9nYW1wYWQvYWRzP3N6PTJ4MiZpdT0vNDEyOC9jYnMuc2YmY2l1X3N6cyZpbXBsPXMmZ2RmcF9yZXE9MSZlbnY9dnAmb3V0cHV0PXhtbF92YXN0MiZ1bnZpZXdlZF9wb3NpdGlvbl9zdGFydD0xJnVybD1bcmVmZXJyZXJfdXJsXSZkZXNjcmlwdGlvbl91cmw9W2Rlc2NyaXB0aW9uX3VybF0mY29ycmVsYXRvcj1bdGltZXN0YW1wXSIsImtleVZhbHVlcyI6eyJjYXRlZ29yaWVzIjoiW1tDQVRFR09SSUVTXV0iLCJwcm9ncmFtIjoiW1tQUk9HUkFNX05BTUVdXSIsInNpdGVTZWN0aW9uIjoidmlkZW8tZXhwZXJpZW5jZSJ9fX0sImhlYXJ0YmVhdEJldGEiOnsiYWNjb3VudCI6ImNic2xvY2FsLWdsb2JhbC11bmlmaWVkIiwiY2hhcHRlclRyYWNraW5nIjpmYWxzZSwiY3VzdG9tTWV0YWRhdGEiOnsidmlkZW8iOnsiY2JzX21hcmtldCI6InNhbmZyYW5jaXNjby5jYnNsb2NhbC5jb20iLCJjYnNfcGxhdGZvcm0iOiJkZXNrdG9wIn19LCJjdXN0b21UcmFja2luZ1NlcnZlciI6ImNic2RpZ2l0YWxtZWRpYS5kMS5zYy5vbXRyZGMubmV0IiwiY3VzdG9tVHJhY2tpbmdTZXJ2ZXJTZWN1cmUiOiJjYnNkaWdpdGFsbWVkaWEuZDEuc2Mub210cmRjLm5ldCIsImpvYklkIjoic2NfdmEiLCJtYXJrZXRpbmdDbG91ZElkIjoiODIzQkEwMzM1NTY3NDk3RjdGMDAwMTAxQEFkb2JlT3JnIiwicHJvZmlsZSI6ImNicyIsInB1Ymxpc2hlcklkIjoiY2JzbG9jYWwiLCJ0cmFja2luZ1NlcnZlciI6ImNic2RpZ2l0YWxtZWRpYS5oYi5vbXRyZGMubmV0IiwidmVyc2lvbiI6IjEuNSJ9LCJtb2F0Ijp7ImNsaWVudFNpZGUiOnsicGFydG5lckNvZGUiOiJjYnNsb2NhbGFudmF0b3ZpZGVvMTgxNzMyNjA5NDMxIn19fSwiaHRtbDUiOnRydWUsInRva2VuIjoiZGVmYXVsdCJ9"></iframe-->
        <iframe id="vidbg" style="scale:1.3;" src="https://api.wetmet.net/widgets/stream/frame.php?uid=6587125cce5444ce7900e3302801f63d"></iframe>

        <script>
            // ES6 Class
            class TypeWriter {
                constructor(txtElement, words, wait = 3000) {
                    this.txtElement = txtElement;
                    this.words = words;
                    this.txt = '';
                    this.wordIndex = 0;
                    this.wait = parseInt(wait, 10);
                    this.type();
                    this.isDeleting = false;
                }

                type() {
                    // Current index of word
                    const current = this.wordIndex % this.words.length;
                    // Get full text of current word
                    const fullTxt = this.words[current];

                    // Initial Type Speed
                    let typeSpeed = 300;

                    if (!typingPaused) {
                        // Check if deleting
                        if (this.isDeleting) {
                            // Remove char
                            this.txt = fullTxt.substring(0, this.txt.length - 1);
                        } else {
                            // Add char
                            this.txt = fullTxt.substring(0, this.txt.length + 1);
                        }

                        // Insert txt into element
                        this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

                        if (this.isDeleting) {
                            typeSpeed /= 2;
                        }

                        // If word is complete
                        if (!this.isDeleting && this.txt === fullTxt) {
                            // Make pause at end
                            typeSpeed = this.wait;
                            // Set delete to true
                            this.isDeleting = true;
                        } else if (this.isDeleting && this.txt === '') {
                            this.isDeleting = false;
                            // Move to next word
                            this.wordIndex++;
                            // Pause before start typing
                            typeSpeed = 500;
                        }
                    }
                    setTimeout(() => this.type(), typeSpeed);
                }
            }


            // Init On DOM Load
            document.addEventListener('DOMContentLoaded', init);
            let typingPaused = 0;

            // Init App
            function init() {
                getBlogs();
                getFun();
                //getContact();
                $("#scroll-left").addEventListener("click", function(e) {
                    $("#blog-scroller").scrollBy({
                        top: 0,
                        left: -600,
                        behavior: "smooth"
                    });
                    $("#scroll-right").style.opacity = 1;
                    let s = $("#blog-scroller");
                    if (s.scrollLeft <= 602) {
                        $("#scroll-left").style.opacity = 0;
                    }
                });
                $("#scroll-right").addEventListener("click", function(e) {
                    $("#blog-scroller").scrollBy({
                        top: 0,
                        left: 600,
                        behavior: "smooth"
                    });
                    $("#scroll-left").style.opacity = 1;
                    let s = $("#blog-scroller");
                    if ((s.offsetWidth + s.scrollLeft) >= s.scrollWidth - 602) {
                        $("#scroll-right").style.opacity = 0;
                    }
                });
                $("#fun-scroll-left").addEventListener("click", function(e) {
                    $(".fun-scroller").scrollBy({
                        top: 0,
                        left: -600,
                        behavior: "smooth"
                    });
                    $("#fun-scroll-right").style.opacity = 1;
                    let s = $(".fun-scroller");
                    if (s.scrollLeft <= 602) {
                        $("#fun-scroll-left").style.opacity = 0;
                    }
                });
                $("#fun-scroll-right").addEventListener("click", function(e) {
                    $(".fun-scroller").scrollBy({
                        top: 0,
                        left: 500,
                        behavior: "smooth"
                    });
                    $("#fun-scroll-left").style.opacity = 1;
                    let s = $(".fun-scroller");
                    if ((s.offsetWidth + s.scrollLeft) >= s.scrollWidth - 602) {
                        $("#fun-scroll-right").style.opacity = 0;
                    }
                });
                $(".fun-scroller").addEventListener("scroll", function(e) {
                    $("#fun-scroll-left").style.opacity = 1;
                    $("#fun-scroll-right").style.opacity = 1;
                    let s = $(".fun-scroller");
                    if ((s.offsetWidth + s.scrollLeft) >= s.scrollWidth - 2) {
                        $("#fun-scroll-right").style.opacity = 0;
                    } else if (s.scrollLeft <= 2) {
                        $("#fun-scroll-left").style.opacity = 0;
                    }
                });

                const txtElement = $('.txt-type');
                const words = JSON.parse(txtElement.getAttribute('data-words'));
                const wait = txtElement.getAttribute('data-wait');
                // Init TypeWriter
                new TypeWriter(txtElement, words, wait);

                document.addEventListener("click", function(e) {
                    if (e.target.classList.contains("txt")) {
                        $(".txt-type").style.display = (!typingPaused) ? "none" : "inline-block";
                        typingPaused ^= 1;
                        setTimeout(function() {
                            $(".txt-type").style.display = "inline-block";
                            typingPaused = 0;
                        }, 5000);;

                        return addDivConfetti(e, 30);

                    }
                });

            }
            const $ = str => document.querySelector(str);
            const $$ = str => document.querySelectorAll(str);

            function cleanDate(now) {
                if (typeof(now) === "string") {
                    now = new Date(now);
                }
                let mos = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                let out = "";

                if (now && now.getMonth) {
                    out = mos[now.getMonth()].substring(0, 3) + '. ' + now.getDate() + ', ' + now.getFullYear();
                }
                return out;
            }

            function getFun() {
                fetch("/crblog/nav/games.json").then(r => r.json()).then(data => {
                    window.funentries = data;
                    let limit = (data.length > 10) ? 10 : data.length;
                    let out = "";

                    for (let i = 0; i < limit; i++) {
                        let item = data[i];
                        out += `<li><a href="${item.link}" class="scroll-link" target="_blank">
        <div class="hero-image" style="background-image:url('${item.screenshot}')"></div>
        <div class='funitem'>
          <h3>${item.title}</h3>
          <h4>${item.desc}</h4>
          <div class='byline' style="display:flex;">
            <div>by Chris Robison</div>
        <div>${item.category}</div>
          </div>
        </div></a>
     </li>`;
                    }
                    /* out += `<li>
                      <div class="hero-image" style="font-size:36px;font-weight:bold;">More Posts<br>...</div>
                      <div class='funitem'>
                        <h3>View More...</h3>
                        <h4></h4>
                        <div class='byline' style="display:flex;">
                          <div></div>
                          <div></div>
                        </div>
                      </div>
                    </li>`;
                    */
                    out += "";
                    console.log(out);
                    $("#fun-scroll").innerHTML = out;
                });
            }

            function getBlogs() {
                let limit = 10;
                fetch("/crblog/blog/posts.json").then(r => r.json()).then(data => {
                    window.blogentries = data;
                    let out = "";

                    for (let i = 0; i < limit; i++) {
                        let item = data[i];
                        out += `<li><a href="${item.link}" target="_blank" class="scroll-link">
        <div class="hero-image" style="background-image:url('${item.hero}')">
          <h3 class="blogtitle">${item.title}</h3>
        </div>
        <div class='blogitem'>
          <h4>${item.subtitle}</h4>
          <div class='byline' style="display:flex;">
            <div>Chris Robison</div>
            <div>${cleanDate(item.date)}</div>
          </div>
        </div>
        </a>
     </li>`;
                    }
                    /*
                        out += `<li>
                          <div class="hero-image" style="font-size:36px;font-weight:bold;">More Posts<br>...</div>
                          <div class='blogitem'>
                            <h3>View More...</h3>
                            <h4></h4>
                            <div class='byline' style="display:flex;">
                              <div>Chris Robison</div>
                              <div></div>
                            </div>
                          </div>
                        </li>`;
                        */
                    out += "";
                    console.log(out);
                    $("#blog-scroll").innerHTML = out;
                });
            }

            function getNavData(file) {

            }

            let animationState = 1;

            function initTyping() {
                let choice = localStorage.getItem("noAnimations");

                window.animationState = !choice;
                if (window.animationState) {

                }
            }

            function togglePause() {
                $("#pause").classList.toggle("playing");
                $("#pause").classList.toggle("paused");
                typingPaused ^= 1;
            }
            let booms = [];
            let rocketTgt = [0, 0];
            let rockets = [];

            function calcAngleDegrees(x1, y1, x2 = 0, y2 = 0) {
                return (Math.atan2(y2 - y1, x2 - x1) * 180) / Math.PI;
            }

            function doRocket(x, y) {
                let rocket = document.createElement("div");
                rocket.style.top = window.innerHeight + 'px';

                if (x < window.innerWidth / 2) {
                    rocket.style.left = 0 + 'px';
                    let angle = calcAngleDegrees(x, y, 0, window.innerHeight);
                    rocket.style.backgroundImage = 'url("/crblog/assets/img/rocket-tiny.png")';
                    rocket.style.transform = `translateX(0px) translateY(0px) scale(2) rotate(${angle+90}deg)`;

                    document.body.append(rocket);
                    rocket.classList.add("rocket");
                    rockets.push(rocket);
                    setTimeout(function() {
                        rockets[rockets.length - 1].style.transform = `translateX(${x - 25}px) translateY(-${(window.innerHeight - y) +20 }px) scale(0.2) rotate(${angle+90}deg)`;
                    }, 10);
                } else {
                    rocket.style.left = window.innerWidth + 'px';
                    let angle = calcAngleDegrees(x, y, window.innerWidth + 25, window.innerHeight);
                    rocket.style.transform = `translateX(0px) translateY(0px) scale(2) rotate(${angle-90}deg)`;

                    document.body.append(rocket);
                    rocket.classList.add("rocket");
                    rockets.push(rocket);
                    setTimeout(function() {
                        rockets[rockets.length - 1].style.transform = `translateX(-${window.innerWidth-x-25}px) translateY(-${(window.innerHeight - y + 50)}px) scale(0.2) rotate(${angle - 90}deg)`;
                    }, 10);

                }
                rocketTgt = [x, y];
                setTimeout(function() {
                    doExplosion(x, y);
                }, 300);
            }

            function killUFO(idx, rect) {
                setTimeout(function() {
                    addDivConfetti({
                        x: rect.x,
                        y: rect.y
                    });
                    ufos[idx].destroy();
                    ufos.splice(idx, 1);
                }, 200);
            }

            function checkHit(rocket) {
                let hit = 0;
                console.log(`rocket: [x:${rocket.x}, y:${rocket.y}]`);
                ufos.forEach((item, idx) => {
                    if (item && item.el) {
                        let alien = item.el.getBoundingClientRect();
                        console.log(`alien ${idx}: [x1:${alien.left}, x2:${alien.right}] [y1:${alien.top}, y2:${alien.bottom}]`);
                        if (((rocket.x > alien.left) && (rocket.x < alien.right)) &&
                            ((rocket.y > alien.top) && (rocket.y < alien.bottom))) {
                            killUFO(idx, alien);
                            hit = 1;

                        }
                    }
                });
                return hit;
            }

            function doExplosion(x, y) {
                let r = rockets.shift();
                r.parentElement.removeChild(r);

                let hit = checkHit({
                    x: rocketTgt[0],
                    y: rocketTgt[1]
                });

                let boom = document.createElement("div");
                boom.style.position = "absolute";
                boom.style.top = rocketTgt[1] + 20 + 'px';
                boom.style.left = rocketTgt[0] + 20 + 'px';
                boom.style.zIndex = 999999;
                document.body.append(boom);
                boom.classList.add("explode");
                booms.push(boom);
                setTimeout(function() {
                    let el = booms.shift();
                    if (el) el.parentElement.removeChild(el);
                }, 2250);

            }
            ufos = [];
            class UFO {
                paused = false;
                el;
                myx = 0;
                y = 0;
                z = 0.2;
                vx = 0;
                vy = 0;
                self = this;

                direction = 0;

                get myx() {
                    return this.myx;
                }
                set myx(val) {

                    this.myx = val;
                }
                get z() {
                    return this.z;
                }
                set z(val) {
                    this.z = val;
                }
                newDestination() {
                    let xpadding = 300,
                        ypadding = 300;
                    let x = Math.floor(Math.random() * (window.innerWidth - (xpadding * 2))) + xpadding;
                    let y = Math.floor(Math.random() * (window.innerHeight - (ypadding * 2))) + ypadding;
                    let z = (Math.random() * 1.5) + 0.2;
                    
                    return {x:x, y:y, z:z};
                }
                dart() {
                    this.dest = this.newDestination();
                    this.el.style.transitionDuration = Math.floor(Math.random()*6000) + 1000;
                    this.el.style.left = this.dest.x + 'px';
                    this.el.style.top = this.dest.y + 'px';
                    this.el.style.scale = this.dest.z;
                    this.el.style.zIndex = 9999 * this.dest.z;
                    this.wait = (Math.random() * 10000) + 2000;
                }
                constructor() {
                    var self = this;
                    this.el = document.createElement("div");
                    this.el.className = "ufo";
                    this.direction = (Math.random() < 0.5) ? 1 : -1;
                    this.vx = ((Math.random() * 5) + 1) * this.direction;
                    this.vy = (Math.random() * 2) - 1;
                    this.vz = (Math.random() - 0.5) / 100;
                    this.myx = (this.direction > 0) ? -100 : window.innerWidth + 100;
                    this.y = Math.floor((Math.random() * (window.innerHeight - 300)) + 150);
                    this.el.style.top = "-100px";
                    
                    this.z = (Math.random() + 0.5);
                    this.el.style.scale = this.z;
                    this.el.id = "ufo-" + ufos.length;
                    
                    this.dest = this.newDestination();
                    this.nextdest = this.newDestination();
                    
                    this.type = Math.random() < 0.5 ? "dart" : "linear";
                    
                    this.time = Date.now();

                    if (this.type === "dart") {
                        this.dart();
                    }
                    document.body.append(this.el);

                    this.move = () => {
                        if (!this.paused && this.type!="dart") {
                            this.myx += this.vx;
                            this.z += this.vz;
                            if ((this.z > 2) || (this.z < 0.3)) {
                                this.vz *= -1;
                            }
                            this.rect = this.el.getBoundingClientRect();
                            this.myx = this.myx + this.vx;
                            this.y += this.vy; //Math.cos(this.myx % (Math.PI * 2));
                            this.el.style.left = this.myx + 'px';
                            this.el.style.top = this.y + 'px';
                            this.el.style.scale = this.z;
                            this.el.style.zIndex = 9999 * this.z;
                            
                            if (Math.random() < 0.05) {
                                this.vx *= (Math.random() * 5) - 2.5;
                                this.vy = (Math.random() * 6) - 3;;
                            }
                            if ((this.rect.x > window.innerWidth + 150) || (this.rect.x < -150)) {
                                console.log(`this.myx: ${this.myx} innerWidth: ${window.innerWidth} this.vx: ${this.vx}`);
                                this.paused = true;
                                for (let i = 0; i < ufos.length; i++) {
                                    if (ufos[i].el === this.el) {
                                        console.log(`Removing ufo #${i}`);
                                        //ufos.splice(i, 1);
                                        this.destroy();
                                    }
                                }
                            }
                        } else if (!this.paused && this.type==="dart") {
                            let now = Date.now();
                            let elapsed = now - this.time;
                            if (elapsed > this.wait) {
                                this.dart();
                                this.time = Date.now();
                            }
                        }
                    }
                }
                destroy() {
                    if (this.el && this.el.parentNode) {
                        this.el.parentNode.removeChild(this.el);
                    }
                    this.vx = this.vy = this.myx = this.y = this.el = undefined;
                }
            }
            
            function ufoloop(evt) {
                let now = Date.now();
                let elapsed = now - lastDrawTime;
                if (elapsed > fpsInterval) {
                    lastDrawTime = now - (elapsed % fpsInterval);

                    ufos.forEach(alien => {
                        alien.move();
                    });
                }
                if ((!window.paused) && (ufos.length)) {
                    window.requestAnimationFrame(ufoloop);
                }
            }
            var targetFPS = 60;
            var fpsInterval = 1000 / targetFPS;
            var lastDrawTime;

            function doUFO() {
                let myufo = new UFO();
                ufos.push(myufo);
                lastDrawTime = Date.now();

                window.requestAnimationFrame(ufoloop);

                if (Math.random() < 0.5) setTimeout(doUFO, Math.random() * 20000);
            }
            // setInterval(doUFO, 15000 + Math.floor(Math.random() * 120000));
            doUFO();

            /*

            function ufo() {
              let ship = document.createElement("div");
              ship.className = "ufo";
              ship.style.top = "0px";
              let direction = (Math.random()<0.5) ? 1 : 0;
              ship.dataset.direction = direction;

              ship.style.left = direction ? "0px" : window.innerWidth + 100 + "px";
              ship.style.scale = Math.random() + 0.25;
              ship.id = "ufo";
              document.body.append(ship);
              setTimeout(function() {
                ship.style.top = (window.innerHeight / 2) + (Math.floor(Math.random()*200)-100) + 'px';
                ship.style.left = direction ? window.innerWidth + 100 + 'px' : "-100px";
              }, 10);
              setTimeout(function() {
                let el = $("#ufo");
                if (el) el.parentElement.removeChild(el);
              }, 16000);
              setTimeout(ufo, Math.floor(Math.random() * 40000) + 10000);
            }
                                              */
            document.addEventListener("click", function(e) {
                console.log("clicking!");
                console.dir(e);
                if (e.pageY > window.innerHeight) return true;
                e.preventDefault();
                doRocket(e.clientX - 15, e.clientY - 10);
            });
            // setTimeout(ufo, Math.floor(Math.random() * 30000) + 10000);

            // turbulence
            var img = $("#displacementFilter feTurbulence");
            var frames = 0;
            var rad = Math.PI / 180;

            function AnimateBaseFrequency() {
                //baseFrequency="0.01 .1"
                bfx = 0.01;
                bfy = .1;
                frames += .25
                bfx += 0.001 * Math.cos(frames * rad);
                bfy += 0.005 * Math.sin(frames * rad);

                bf = bfx.toString() + ' ' + bfy.toString();
                img.setAttributeNS(null, 'baseFrequency', bf);

                window.requestAnimationFrame(AnimateBaseFrequency);
            }

            //window.requestAnimationFrame(AnimateBaseFrequency);
        </script>
</body>

</html>

```
