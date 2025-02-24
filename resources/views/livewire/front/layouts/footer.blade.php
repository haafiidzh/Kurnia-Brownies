<footer class="bg-primary">

    <div class="w-full px-10 md:px-16 lg:px-[120px] py-16 flex flex-col gap-5">
        <div class="w-full flex flex-col md:flex-row gap-5 mb-4">
            <section class="w-full md:w-1/3 flex flex-col gap-10 items-center">
                <img class="w-32" src="{{ url(cache('footer_logo') ?: 'assets/images/default/brand_logo_long.png') }}"
                    alt="Logo {{ cache('app_name') }}">
                <div class="flex flex-col gap-3 items-center relative w-full">
                    <svg class="absolute bottom-0 left-0 w-10 h-auto rotate-90 translate-y-3"
                        xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 2000 2000">
                        <g>
                            <g fill="#facc15" stroke-width="29" stroke="#ffe89c" id="star"
                                transform="matrix(1,0,0,1,0,-25)">
                                <path
                                    d="M 500 500 C 1000 1000 1000 1000 2000 0 C 1000 1000 1000 1000 1500 1500 C 1000 1000 1000 1000 0 2000 C 1000 1000 1000 1000 500 500"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </g>
                    </svg>
                    <svg class="absolute top-0 right-0 w-10 h-auto rotate-90 -translate-y-3"
                        xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 2000 2000">
                        <g>
                            <g fill="#facc15" stroke-width="29" stroke="#ffe89c" id="star"
                                transform="matrix(1,0,0,1,0,-25)">
                                <path
                                    d="M 500 500 C 1000 1000 1000 1000 2000 0 C 1000 1000 1000 1000 1500 1500 C 1000 1000 1000 1000 0 2000 C 1000 1000 1000 1000 500 500"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </g>
                    </svg>
                    <p class="w-[80%] italic font-poppins text-sm text-center text-gray-200">
                        {{ cache('footer_description') ?: 'Freshly baked brownies, just for you! Indulge in our warm and delightful treats.' }}
                    </p>
                </div>
            </section>
            <div class="border-t sm:border-r border-secondary md:mr-5"></div>
            <section class="flex gap-8 flex-col w-full md:w-3/4 text-sm">
                <div class="flex flex-col w-full">
                    <h2 class="text-xl font-nunito font-semibold text-secondary mb-3 md:mb-2">Lokasi Kami</h2>
                    <p class="text-gray-200 font-poppins">
                        {{ cache('contact-address') ?: 'Jl. Adi Sucipto, Gatak, Blulukan, Kec. Colomadu, Kabupaten Karanganyar, Jawa Tengah 57174' }}
                    </p>
                </div>
                <div class="flex space-y-5 space-x-0 md:space-x-5 md:space-y-0 md:flex-nowrap flex-wrap flex-row items-start">
                    <div class="w-1/2 md:w-1/4 self-end md:self-auto flex-shrink-0">
                        <h2 class="text-xl font-nunito font-semibold text-secondary mb-5">Menu</h2>
                        <a href="{{ route('home') }}"
                            class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins">Beranda</a>
                        <a href="{{ route('product') }}"
                            class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins">Produk</a>
                        <a href="{{ route('about') }}"
                            class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins">Tentang
                            Kami</a>
                    </div>

                    <div class="w-1/2 md:w-1/4 pb-5 md:pb-0 text-end self-start md:self-auto md:text-left flex-shrink-0">
                        <h2 class="text-xl font-nunito font-semibold text-secondary mb-5">Lainnya</h2>
                        {{-- <a href="{{ route('privacy') }}"
                            class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins">
                            Kebijakan Privasi
                        </a> --}}
                        <a href="{{ route('faq') }}"
                            class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins">FAQ</a>
                        <a href="{{ route('feedback') }}"
                            class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins">
                            Umpan Balik
                        </a>
                    </div>
                    <div class="w-1/2 md:w-1/4 flex-shrink-0">
                        <h2 class="text-xl font-nunito font-semibold text-secondary mb-5">Ikuti Kami</h2>
                        
                        @if (cache('social-instagram_name'))
                            <a href="{{ cache('social-instagram_link') ?: 'javascript:void(0)' }}"
                                class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins mb-[1px]">
                                <div class="flex flex-row break-words">
                                    <span class="w-4 h-4 mr-[2px] flex-shrink-0">
                                        <i class="fa-brands fa-instagram"></i>
                                    </span>
                                    {{ cache('social-instagram_name') }}
                                </div>
                            </a>
                        @endif
                        @if (cache('social-tiktok_name'))
                            <a href="{{ cache('social-tiktok_link') ?: 'javascript:void(0)' }}"
                                class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins mb-[1px]">
                                <div class="flex flex-row break-words">
                                    <span class="w-4 h-4 mr-[2px] flex-shrink-0">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </span>
                                    {{ cache('social-tiktok_name') }}
                                </div>
                            </a>
                        @endif
                        @if (cache('social-facebook_name'))
                            <a href="{{ cache('social-facebook_link') ?: 'javascript:void(0)' }}"
                                class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins mb-[1px]">
                                <div class="flex flex-row break-words">
                                    <span class="w-4 h-4 mr-[2px] flex-shrink-0">
                                        <i class="fa-brands fa-facebook"></i>
                                    </span>
                                    {{ cache('social-facebook_name') }}
                                </div>
                            </a>
                        @endif
                        @if (cache('social-youtube_name'))
                            <a href="{{ cache('social-youtube_link') ?: 'javascript:void(0)' }}"
                                class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins mb-[1px]">
                                <div class="flex flex-row break-words">
                                    <span class="w-4 h-4 mr-[2px] flex-shrink-0">
                                        <i class="fa-brands fa-youtube"></i>
                                    </span>
                                    {{ cache('social-youtube_name') }}
                                </div>
                            </a>
                        @endif
                        @if (cache('social-twitter_name'))
                            <a href="{{ cache('social-twitter_link') ?: 'javascript:void(0)' }}"
                                class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins mb-[1px]">
                                <div class="flex flex-row break-words">
                                    <span class="w-4 h-4 mr-[2px] flex-shrink-0">
                                        <i class="fa-brands fa-twitter"></i>
                                    </span>
                                    {{ cache('social-twitter_name') }}
                                </div>
                            </a>
                        @endif
                    </div>
                    <div class="w-1/2 md:w-1/4 text-end md:text-left flex-shrink-0">
                        <h2 class="text-xl font-nunito font-semibold text-secondary mb-5">Hubungi Kami</h2>
                        <a href="https://wa.me/{{ cache('contact-whatsapp') ?: 'javascript:void(0)' }}" target="_blank"
                            class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins">
                            <div class="flex flex-row-reverse md:flex-row">
                                <span class="w-4 h-4 ml-[2px] md:mr-[2px]">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </span>
                                Whatsapp
                            </div>
                            
                        </a>
                        <a href="mailto:{{ cache('contact-email') ?: 'javascript:void(0)' }}"
                            class="text-gray-200 transition-colors duration-300 hover:text-secondary block font-poppins">
                            <div class="flex flex-row-reverse md:flex-row">
                                <span class="w-4 h-4 ml-[2px] md:mr-[2px]">
                                    <i class="fa-regular fa-envelope"></i>
                                </span>
                                Email
                            </div>
                        </a>
                    </div>
                </div>

            </section>
        </div>

        <section class="relative w-full z-0 shadow-lg bg-secondary rounded-md py-5 px-10 overflow-hidden">
            <svg class="-z-10 absolute overflow-hidden w-auto h-72 -translate-x-48 sm:-translate-x-32 md:-translate-x-16 lg:translate-x-0 -translate-y-19  left-0 top-0"
                xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800">
                <g transform="matrix(1,0,0,1,0,0)">
                    <circle r="62" cx="684" cy="684" stroke-width="0.84" stroke="#a63603"
                        fill="none" opacity="0.1"
                        transform="matrix(-0.1736481776669303,0.984807753012208,-0.984807753012208,-0.1736481776669303,863.3823722716553,75.53616986188888)">
                    </circle>
                    <circle r="64.28888888888889" cx="676.3777777777777" cy="674.6666666666666"
                        stroke-width="0.6222222222222222" stroke="#a63603" fill="none"
                        opacity="0.12000000000000001"
                        transform="matrix(-0.14685523603440814,0.9879298449076749,-0.9891915292237607,-0.15490197397288838,852.5413094038823,66.78885162608537)">
                    </circle>
                    <circle r="66.57777777777778" cx="668.7555555555556" cy="665.3333333333334"
                        stroke-width="0.7444444444444445" stroke="#a63703" fill="none" opacity="0.14"
                        transform="matrix(-0.11996023134907488,0.9906951285414755,-0.9929123553784358,-0.13609982470300763,841.3997332644768,58.16187846461287)">
                    </circle>
                    <circle r="68.86666666666666" cx="661.1333333333333" cy="656"
                        stroke-width="0.8666666666666667" stroke="#a63703" fill="none" opacity="0.16"
                        transform="matrix(-0.09297761569779904,0.9931026051827267,-0.9959680973044653,-0.11724852058461603,829.9739103312698,49.658366160755804)">
                    </circle>
                    <circle r="71.15555555555555" cx="653.5111111111111" cy="646.6666666666666"
                        stroke-width="0.9888888888888889" stroke="#a63803" fill="none" opacity="0.18"
                        transform="matrix(-0.06592187957057662,0.9951514053288423,-0.9983568899949511,-0.09835487009818225,818.2800712050549,41.28138590773597)">
                    </circle>
                    <circle r="73.44444444444444" cx="645.8888888888889" cy="637.3333333333334"
                        stroke-width="1.1111111111111112" stroke="#a63803" fill="none" opacity="0.2"
                        transform="matrix(-0.038807547436919256,0.9968407890195684,-1.0000771381714415,-0.07942569701831002,806.3344181854836,33.03396319949661)">
                    </circle>
                    <circle r="75.73333333333333" cx="638.2666666666667" cy="628"
                        stroke-width="1.2333333333333334" stroke="#a63903" fill="none" opacity="0.22"
                        transform="matrix(-0.011649173314420364,0.9981701461042338,-1.0011275167624878,-0.06046783794921438,794.1530962458386,24.919076737992214)">
                    </circle>
                    <circle r="78.02222222222223" cx="630.6444444444444" cy="618.6666666666666"
                        stroke-width="1.3555555555555556" stroke="#a63903" fill="none"
                        opacity="0.24000000000000002"
                        transform="matrix(0.015538663668164546,0.9991389964621167,-1.001506971296935,-0.04148813985555942,781.7522029597759,16.9396573573772)">
                    </circle>
                    <circle r="80.3111111111111" cx="623.0222222222222" cy="609.3333333333334"
                        stroke-width="1.4777777777777779" stroke="#a53a03" fill="none" opacity="0.26"
                        transform="matrix(0.042741363710956604,0.9997469901758478,-1.0012147182117457,-0.022493457589559136,769.1477707408383,9.098586965484515)">
                    </circle>
                    <circle r="82.6" cx="615.4" cy="600" stroke-width="1.5999999999999999"
                        stroke="#a53a03" fill="none" opacity="0.28"
                        transform="matrix(0.06994431078375471,0.9999939076577904,-1.0002502450742123,-0.0034906514152236758,756.355746874036,1.3986975029733912)">
                    </circle>
                    <circle r="84.88888888888889" cx="607.7777777777778" cy="590.6666666666666"
                        stroke-width="1.722222222222222" stroke="#a53b03" fill="none"
                        opacity="0.30000000000000004"
                        transform="matrix(0.09713287706520961,0.9998796597293474,-0.998613310718444,0.015513415469343355,743.3920105996656,-6.157230079476335)">
                    </circle>
                    <circle r="87.17777777777778" cx="600.1555555555556" cy="581.3333333333334"
                        stroke-width="1.8444444444444443" stroke="#a53b03" fill="none" opacity="0.32"
                        transform="matrix(0.12429242737798935,0.9994042876531702,-0.9963039452960745,0.03451187941071065,730.2723363208756,-13.566466825552425)">
                    </circle>
                    <circle r="89.46666666666667" cx="592.5333333333333" cy="572"
                        stroke-width="1.9666666666666666" stroke="#a53c03" fill="none"
                        opacity="0.33999999999999997"
                        transform="matrix(0.15140832361753104,0.9985679631182558,-0.9933224502411803,0.05349787877904917,717.012399705515,-20.826336758922025)">
                    </circle>
                    <circle r="91.75555555555556" cx="584.9111111111112" cy="562.6666666666666"
                        stroke-width="2.0888888888888886" stroke="#a53c03" fill="none" opacity="0.36"
                        transform="matrix(0.1784659291719619,0.9973709881779381,-0.9896693981494395,0.07246455644632907,703.6277620160236,-27.934217849706783)">
                    </circle>
                    <circle r="94.04444444444445" cx="577.2888888888889" cy="553.3333333333333"
                        stroke-width="2.2111111111111112" stroke="#a53d02" fill="none" opacity="0.38"
                        transform="matrix(0.20545061333076742,0.9958137951407966,-0.9853456325716176,0.09140506226289419,690.1338807499885,-34.887542961476356)">
                    </circle>
                    <circle r="96.33333333333333" cx="569.6666666666666" cy="544"
                        stroke-width="2.333333333333333" stroke="#a53d02" fill="none" opacity="0.4"
                        transform="matrix(0.23234775567975618,0.99389694641452,-0.9803522677215061,0.11031255553151163,676.5460609081565,-41.68380077841266)">
                    </circle>
                    <circle r="98.62222222222222" cx="562.0444444444445" cy="534.6666666666666"
                        stroke-width="2.4555555555555557" stroke="#a53d02" fill="none"
                        opacity="0.42000000000000004"
                        transform="matrix(0.25914275047987534,0.9916211343027828,-0.9746906880984922,0.1291802074780131,662.8795001576402,-48.32053671231836)">
                    </circle>
                    <circle r="100.91111111111111" cx="554.4222222222222" cy="525.3333333333333"
                        stroke-width="2.5777777777777775" stroke="#a53e02" fill="none"
                        opacity="0.44000000000000006"
                        transform="matrix(0.28582101102739316,0.9889871807552079,-0.9683625480249829,0.14800120371762435,649.1492201394265,-54.79535378913283)">
                    </circle>
                    <circle r="103.19999999999999" cx="546.8" cy="516" stroke-width="2.6999999999999997"
                        stroke="#a53e02" fill="none" opacity="0.45999999999999996"
                        transform="matrix(0.31236797399297,0.9859960370705049,-0.9613697710989512,0.16676874671610234,635.3701085014998,-61.10591351464291)">
                    </circle>
                    <circle r="105.48888888888888" cx="539.1777777777778" cy="506.66666666666663"
                        stroke-width="2.822222222222222" stroke="#a53f02" fill="none" opacity="0.48"
                        transform="matrix(0.33876910373710345,0.9826487835528919,-0.9537145495619296,0.1854760582447822,621.5568713255625,-67.24993671906964)">
                    </circle>
                    <circle r="107.77777777777777" cx="531.5555555555555" cy="497.3333333333333"
                        stroke-width="2.944444444444444" stroke="#a53f02" fill="none" opacity="0.5"
                        transform="matrix(0.3650098965994327,0.9789466291219243,-0.9453993435828103,0.20411638182865566,607.7240743041201,-73.22520438023196)">
                    </circle>
                    <circle r="110.06666666666666" cx="523.9333333333334" cy="488"
                        stroke-width="3.0666666666666664" stroke="#a54002" fill="none" opacity="0.52"
                        transform="matrix(0.3910758851593523,0.9748909108758727,-0.9364268804578724,0.22268298518659072,593.886064142177,-79.02955842498534)">
                    </circle>
                    <circle r="112.35555555555555" cx="516.3111111111111" cy="478.66666666666663"
                        stroke-width="3.1888888888888887" stroke="#a54002" fill="none" opacity="0.54"
                        transform="matrix(0.4169526424653749,0.9704830936088055,-0.9268001537274974,0.2411691626628132,580.0570444503761,-84.6609025086475)">
                    </circle>
                    <circle r="114.64444444444445" cx="508.68888888888887" cy="469.3333333333333"
                        stroke-width="3.311111111111111" stroke="#a44002" fill="none" opacity="0.56"
                        transform="matrix(0.44262578623065874,0.9657247692815539,-0.9165224222100855,0.25956823764877207,566.2509666012504,-90.11720277213044)">
                    </circle>
                    <circle r="116.93333333333334" cx="501.06666666666666" cy="460"
                        stroke-width="3.433333333333333" stroke="#a44102" fill="none" opacity="0.58"
                        transform="matrix(0.46808098299209366,0.9606176564467463,-0.9055972089537336,0.2778735649945147,552.4816256929696,-95.39648857650445)">
                    </circle>
                    <circle r="119.22222222222223" cx="493.44444444444446" cy="450.66666666666663"
                        stroke-width="3.5555555555555554" stroke="#a44102" fill="none" opacity="0.6"
                        transform="matrix(0.493303952230313,0.955163599628123,-0.8940283001062876,0.2960785334087001,538.7625956681358,-100.49685321472924)">
                    </circle>
                    <circle r="121.5111111111111" cx="485.8222222222222" cy="441.3333333333333"
                        stroke-width="3.6777777777777776" stroke="#a44202" fill="none" opacity="0.62"
                        transform="matrix(0.5182804704479742,0.9493645686543541,-0.881819743704428,0.31417656784638154,525.1072027354669,-105.41645460029429)">
                    </circle>
                    <circle r="123.8" cx="478.20000000000005" cy="432" stroke-width="3.8" stroke="#a44202"
                        fill="none" opacity="0.64"
                        transform="matrix(0.5429963752036313,0.943222657947601,-0.8689758483825006,0.3321611318837034,511.5285705891704,-110.15351593252171)">
                    </circle>
                    <circle r="126.08888888888889" cx="470.5777777777778" cy="422.66666666666663"
                        stroke-width="3.922222222222222" stroke="#a44202" fill="none" opacity="0.66"
                        transform="matrix(0.567437569098474,0.9367400857670789,-0.8555011820018574,0.3500257300786409,498.03958386863553,-114.70632633828791)">
                    </circle>
                    <circle r="128.3777777777778" cx="462.9555555555556" cy="413.3333333333333"
                        stroke-width="4.044444444444444" stroke="#a44302" fill="none"
                        opacity="0.6799999999999999"
                        transform="matrix(0.5915900237132076,0.9299191934078939,-0.841400570201515,0.367763910316948,484.6528696400755,-119.07324148993666)">
                    </circle>
                    <circle r="130.66666666666666" cx="455.33333333333337" cy="404"
                        stroke-width="4.166666666666666" stroke="#a44302" fill="none" opacity="0.7"
                        transform="matrix(0.6154397834922822,0.9227624443554424,-0.8266790948710037,0.3853692661424481,471.3808181419798,-123.25268419915619)">
                    </circle>
                    <circle r="132.95555555555555" cx="447.7111111111111" cy="394.66666666666663"
                        stroke-width="4.288888888888889" stroke="#a44402" fill="none" opacity="0.72"
                        transform="matrix(0.6389729695726774,0.9152724233956802,-0.8113420925463174,0.40283543907084285,458.2355611646245,-127.2431449866092)">
                    </circle>
                    <circle r="135.24444444444444" cx="440.0888888888889" cy="385.3333333333333"
                        stroke-width="4.411111111111111" stroke="#a44402" fill="none" opacity="0.74"
                        transform="matrix(0.6621757835543777,0.9074518356815822,-0.7953951527299465,0.42015612088618526,445.2289464673279,-131.04318262710694)">
                    </circle>
                    <circle r="137.53333333333333" cx="432.4666666666667" cy="376"
                        stroke-width="4.533333333333333" stroke="#a44402" fill="none" opacity="0.76"
                        transform="matrix(0.6850345112096751,0.8993035057561273,-0.7788441161360042,0.4373250559192089,432.3725649904527,-134.65142467013447)">
                    </circle>
                    <circle r="139.82222222222222" cx="424.84444444444443" cy="366.66666666666663"
                        stroke-width="4.655555555555555" stroke="#a44501" fill="none" opacity="0.78"
                        transform="matrix(0.7075355261283482,0.8908303765321662,-0.7616950728615433,0.4543360433066685,419.67772767872907,-138.06656793553384)">
                    </circle>
                    <circle r="142.1111111111111" cx="417.22222222222223" cy="357.3333333333333"
                        stroke-width="4.777777777777778" stroke="#a44501" fill="none" opacity="0.8"
                        transform="matrix(0.7296652932957644,0.8820355082295365,-0.7439543604851854,0.4711829392308929,407.15544547971933,-141.2873789841717)">
                    </circle>
                    <circle r="144.39999999999998" cx="409.6" cy="348" stroke-width="4.8999999999999995"
                        stroke="#a44601" fill="none" opacity="0.82"
                        transform="matrix(0.7514103726008731,0.8729220772698096,-0.725628562094264,0.48785965913873275,394.81645012866227,-144.31269456341693)">
                    </circle>
                    <circle r="146.68888888888887" cx="401.9777777777778" cy="338.66666666666663"
                        stroke-width="5.022222222222222" stroke="#a44601" fill="none" opacity="0.84"
                        transform="matrix(0.7727574222710254,0.8634933751290712,-0.7067245042417261,0.5043601799391038,382.6711602397904,-147.14142202726998)">
                    </circle>
                    <circle r="148.97777777777776" cx="394.35555555555555" cy="329.3333333333333"
                        stroke-width="5.144444444444444" stroke="#a34601" fill="none" opacity="0.86"
                        transform="matrix(0.7936932022304926,0.8537528071491455,-0.6872492548341036,0.5206785421783329,370.72969024436475,-149.7725397309914)">
                    </circle>
                    <circle r="151.26666666666665" cx="386.73333333333335" cy="320"
                        stroke-width="5.266666666666667" stroke="#a34701" fill="none" opacity="0.88"
                        transform="matrix(0.8142045773794975,0.8437038913076974,-0.6672101209519237,0.5368088521925184,359.00183454952025,-152.2050974000863)">
                    </circle>
                    <circle r="153.55555555555554" cx="379.11111111111114" cy="310.66666666666663"
                        stroke-width="5.388888888888888" stroke="#a34701" fill="none" opacity="0.9"
                        transform="matrix(0.8342785207905195,0.8333502569476516,-0.6466146466039828,0.5527452842361326,347.4970822912718,-154.43821647351365)">
                    </circle>
                    <circle r="155.84444444444443" cx="371.4888888888889" cy="301.3333333333333"
                        stroke-width="5.511111111111111" stroke="#a34801" fill="none" opacity="0.92"
                        transform="matrix(0.853902116818553,0.8226956434663927,-0.6254706104169843,0.56848208258609,336.2245735623916,-156.47109042099305)">
                    </circle>
                    <circle r="158.13333333333333" cx="363.8666666666667" cy="292"
                        stroke-width="5.633333333333333" stroke="#a34801" fill="none" opacity="0.94"
                        transform="matrix(0.8730625641219416,0.8117438989652149,-0.6037860232620856,0.58401356362053,325.19313752870823,-158.302985034298)">
                    </circle>
                    <circle r="160.42222222222222" cx="356.24444444444447" cy="282.66666666666663"
                        stroke-width="5.7555555555555555" stroke="#a34801" fill="none" opacity="0.96"
                        transform="matrix(0.8917471785903255,0.8004989788595133,-0.5815691258199853,0.5993341178715562,314.4112460690777,-159.93323869242772)">
                    </circle>
                    <circle r="162.7111111111111" cx="348.62222222222226" cy="273.3333333333333"
                        stroke-width="5.877777777777777" stroke="#a34900" fill="none" opacity="0.98"
                        transform="matrix(0.9099433961761619,0.7889649444502154,-0.5588283860862319,0.6144382120511945,303.887023830814,-161.36126260056392)">
                    </circle>
                    <circle r="165" cx="341" cy="264" stroke-width="6" stroke="#a34900" fill="none"
                        opacity="1"
                        transform="matrix(0.9276387756261879,0.7771459614569709,-0.5355724968185146,0.6293203910498374,293.6282643577654,-162.58654100272327)">
                    </circle>
                </g>
            </svg>
            <svg class="-z-10 absolute overflow-hidden w-auto h-72 translate-x-48 sm:translate-x-32 md:translate-x-16 lg:translate-x-0 -translate-y-19  right-0 top-0 transform scale-x-[-1] "
                xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800">
                <g transform="matrix(1,0,0,1,0,0)">
                    <circle r="62" cx="684" cy="684" stroke-width="0.84" stroke="#a63603"
                        fill="none" opacity="0.1"
                        transform="matrix(-0.1736481776669303,0.984807753012208,-0.984807753012208,-0.1736481776669303,863.3823722716553,75.53616986188888)">
                    </circle>
                    <circle r="64.28888888888889" cx="676.3777777777777" cy="674.6666666666666"
                        stroke-width="0.6222222222222222" stroke="#a63603" fill="none"
                        opacity="0.12000000000000001"
                        transform="matrix(-0.14685523603440814,0.9879298449076749,-0.9891915292237607,-0.15490197397288838,852.5413094038823,66.78885162608537)">
                    </circle>
                    <circle r="66.57777777777778" cx="668.7555555555556" cy="665.3333333333334"
                        stroke-width="0.7444444444444445" stroke="#a63703" fill="none" opacity="0.14"
                        transform="matrix(-0.11996023134907488,0.9906951285414755,-0.9929123553784358,-0.13609982470300763,841.3997332644768,58.16187846461287)">
                    </circle>
                    <circle r="68.86666666666666" cx="661.1333333333333" cy="656"
                        stroke-width="0.8666666666666667" stroke="#a63703" fill="none" opacity="0.16"
                        transform="matrix(-0.09297761569779904,0.9931026051827267,-0.9959680973044653,-0.11724852058461603,829.9739103312698,49.658366160755804)">
                    </circle>
                    <circle r="71.15555555555555" cx="653.5111111111111" cy="646.6666666666666"
                        stroke-width="0.9888888888888889" stroke="#a63803" fill="none" opacity="0.18"
                        transform="matrix(-0.06592187957057662,0.9951514053288423,-0.9983568899949511,-0.09835487009818225,818.2800712050549,41.28138590773597)">
                    </circle>
                    <circle r="73.44444444444444" cx="645.8888888888889" cy="637.3333333333334"
                        stroke-width="1.1111111111111112" stroke="#a63803" fill="none" opacity="0.2"
                        transform="matrix(-0.038807547436919256,0.9968407890195684,-1.0000771381714415,-0.07942569701831002,806.3344181854836,33.03396319949661)">
                    </circle>
                    <circle r="75.73333333333333" cx="638.2666666666667" cy="628"
                        stroke-width="1.2333333333333334" stroke="#a63903" fill="none" opacity="0.22"
                        transform="matrix(-0.011649173314420364,0.9981701461042338,-1.0011275167624878,-0.06046783794921438,794.1530962458386,24.919076737992214)">
                    </circle>
                    <circle r="78.02222222222223" cx="630.6444444444444" cy="618.6666666666666"
                        stroke-width="1.3555555555555556" stroke="#a63903" fill="none"
                        opacity="0.24000000000000002"
                        transform="matrix(0.015538663668164546,0.9991389964621167,-1.001506971296935,-0.04148813985555942,781.7522029597759,16.9396573573772)">
                    </circle>
                    <circle r="80.3111111111111" cx="623.0222222222222" cy="609.3333333333334"
                        stroke-width="1.4777777777777779" stroke="#a53a03" fill="none" opacity="0.26"
                        transform="matrix(0.042741363710956604,0.9997469901758478,-1.0012147182117457,-0.022493457589559136,769.1477707408383,9.098586965484515)">
                    </circle>
                    <circle r="82.6" cx="615.4" cy="600" stroke-width="1.5999999999999999"
                        stroke="#a53a03" fill="none" opacity="0.28"
                        transform="matrix(0.06994431078375471,0.9999939076577904,-1.0002502450742123,-0.0034906514152236758,756.355746874036,1.3986975029733912)">
                    </circle>
                    <circle r="84.88888888888889" cx="607.7777777777778" cy="590.6666666666666"
                        stroke-width="1.722222222222222" stroke="#a53b03" fill="none"
                        opacity="0.30000000000000004"
                        transform="matrix(0.09713287706520961,0.9998796597293474,-0.998613310718444,0.015513415469343355,743.3920105996656,-6.157230079476335)">
                    </circle>
                    <circle r="87.17777777777778" cx="600.1555555555556" cy="581.3333333333334"
                        stroke-width="1.8444444444444443" stroke="#a53b03" fill="none" opacity="0.32"
                        transform="matrix(0.12429242737798935,0.9994042876531702,-0.9963039452960745,0.03451187941071065,730.2723363208756,-13.566466825552425)">
                    </circle>
                    <circle r="89.46666666666667" cx="592.5333333333333" cy="572"
                        stroke-width="1.9666666666666666" stroke="#a53c03" fill="none"
                        opacity="0.33999999999999997"
                        transform="matrix(0.15140832361753104,0.9985679631182558,-0.9933224502411803,0.05349787877904917,717.012399705515,-20.826336758922025)">
                    </circle>
                    <circle r="91.75555555555556" cx="584.9111111111112" cy="562.6666666666666"
                        stroke-width="2.0888888888888886" stroke="#a53c03" fill="none" opacity="0.36"
                        transform="matrix(0.1784659291719619,0.9973709881779381,-0.9896693981494395,0.07246455644632907,703.6277620160236,-27.934217849706783)">
                    </circle>
                    <circle r="94.04444444444445" cx="577.2888888888889" cy="553.3333333333333"
                        stroke-width="2.2111111111111112" stroke="#a53d02" fill="none" opacity="0.38"
                        transform="matrix(0.20545061333076742,0.9958137951407966,-0.9853456325716176,0.09140506226289419,690.1338807499885,-34.887542961476356)">
                    </circle>
                    <circle r="96.33333333333333" cx="569.6666666666666" cy="544"
                        stroke-width="2.333333333333333" stroke="#a53d02" fill="none" opacity="0.4"
                        transform="matrix(0.23234775567975618,0.99389694641452,-0.9803522677215061,0.11031255553151163,676.5460609081565,-41.68380077841266)">
                    </circle>
                    <circle r="98.62222222222222" cx="562.0444444444445" cy="534.6666666666666"
                        stroke-width="2.4555555555555557" stroke="#a53d02" fill="none"
                        opacity="0.42000000000000004"
                        transform="matrix(0.25914275047987534,0.9916211343027828,-0.9746906880984922,0.1291802074780131,662.8795001576402,-48.32053671231836)">
                    </circle>
                    <circle r="100.91111111111111" cx="554.4222222222222" cy="525.3333333333333"
                        stroke-width="2.5777777777777775" stroke="#a53e02" fill="none"
                        opacity="0.44000000000000006"
                        transform="matrix(0.28582101102739316,0.9889871807552079,-0.9683625480249829,0.14800120371762435,649.1492201394265,-54.79535378913283)">
                    </circle>
                    <circle r="103.19999999999999" cx="546.8" cy="516" stroke-width="2.6999999999999997"
                        stroke="#a53e02" fill="none" opacity="0.45999999999999996"
                        transform="matrix(0.31236797399297,0.9859960370705049,-0.9613697710989512,0.16676874671610234,635.3701085014998,-61.10591351464291)">
                    </circle>
                    <circle r="105.48888888888888" cx="539.1777777777778" cy="506.66666666666663"
                        stroke-width="2.822222222222222" stroke="#a53f02" fill="none" opacity="0.48"
                        transform="matrix(0.33876910373710345,0.9826487835528919,-0.9537145495619296,0.1854760582447822,621.5568713255625,-67.24993671906964)">
                    </circle>
                    <circle r="107.77777777777777" cx="531.5555555555555" cy="497.3333333333333"
                        stroke-width="2.944444444444444" stroke="#a53f02" fill="none" opacity="0.5"
                        transform="matrix(0.3650098965994327,0.9789466291219243,-0.9453993435828103,0.20411638182865566,607.7240743041201,-73.22520438023196)">
                    </circle>
                    <circle r="110.06666666666666" cx="523.9333333333334" cy="488"
                        stroke-width="3.0666666666666664" stroke="#a54002" fill="none" opacity="0.52"
                        transform="matrix(0.3910758851593523,0.9748909108758727,-0.9364268804578724,0.22268298518659072,593.886064142177,-79.02955842498534)">
                    </circle>
                    <circle r="112.35555555555555" cx="516.3111111111111" cy="478.66666666666663"
                        stroke-width="3.1888888888888887" stroke="#a54002" fill="none" opacity="0.54"
                        transform="matrix(0.4169526424653749,0.9704830936088055,-0.9268001537274974,0.2411691626628132,580.0570444503761,-84.6609025086475)">
                    </circle>
                    <circle r="114.64444444444445" cx="508.68888888888887" cy="469.3333333333333"
                        stroke-width="3.311111111111111" stroke="#a44002" fill="none" opacity="0.56"
                        transform="matrix(0.44262578623065874,0.9657247692815539,-0.9165224222100855,0.25956823764877207,566.2509666012504,-90.11720277213044)">
                    </circle>
                    <circle r="116.93333333333334" cx="501.06666666666666" cy="460"
                        stroke-width="3.433333333333333" stroke="#a44102" fill="none" opacity="0.58"
                        transform="matrix(0.46808098299209366,0.9606176564467463,-0.9055972089537336,0.2778735649945147,552.4816256929696,-95.39648857650445)">
                    </circle>
                    <circle r="119.22222222222223" cx="493.44444444444446" cy="450.66666666666663"
                        stroke-width="3.5555555555555554" stroke="#a44102" fill="none" opacity="0.6"
                        transform="matrix(0.493303952230313,0.955163599628123,-0.8940283001062876,0.2960785334087001,538.7625956681358,-100.49685321472924)">
                    </circle>
                    <circle r="121.5111111111111" cx="485.8222222222222" cy="441.3333333333333"
                        stroke-width="3.6777777777777776" stroke="#a44202" fill="none" opacity="0.62"
                        transform="matrix(0.5182804704479742,0.9493645686543541,-0.881819743704428,0.31417656784638154,525.1072027354669,-105.41645460029429)">
                    </circle>
                    <circle r="123.8" cx="478.20000000000005" cy="432" stroke-width="3.8" stroke="#a44202"
                        fill="none" opacity="0.64"
                        transform="matrix(0.5429963752036313,0.943222657947601,-0.8689758483825006,0.3321611318837034,511.5285705891704,-110.15351593252171)">
                    </circle>
                    <circle r="126.08888888888889" cx="470.5777777777778" cy="422.66666666666663"
                        stroke-width="3.922222222222222" stroke="#a44202" fill="none" opacity="0.66"
                        transform="matrix(0.567437569098474,0.9367400857670789,-0.8555011820018574,0.3500257300786409,498.03958386863553,-114.70632633828791)">
                    </circle>
                    <circle r="128.3777777777778" cx="462.9555555555556" cy="413.3333333333333"
                        stroke-width="4.044444444444444" stroke="#a44302" fill="none"
                        opacity="0.6799999999999999"
                        transform="matrix(0.5915900237132076,0.9299191934078939,-0.841400570201515,0.367763910316948,484.6528696400755,-119.07324148993666)">
                    </circle>
                    <circle r="130.66666666666666" cx="455.33333333333337" cy="404"
                        stroke-width="4.166666666666666" stroke="#a44302" fill="none" opacity="0.7"
                        transform="matrix(0.6154397834922822,0.9227624443554424,-0.8266790948710037,0.3853692661424481,471.3808181419798,-123.25268419915619)">
                    </circle>
                    <circle r="132.95555555555555" cx="447.7111111111111" cy="394.66666666666663"
                        stroke-width="4.288888888888889" stroke="#a44402" fill="none" opacity="0.72"
                        transform="matrix(0.6389729695726774,0.9152724233956802,-0.8113420925463174,0.40283543907084285,458.2355611646245,-127.2431449866092)">
                    </circle>
                    <circle r="135.24444444444444" cx="440.0888888888889" cy="385.3333333333333"
                        stroke-width="4.411111111111111" stroke="#a44402" fill="none" opacity="0.74"
                        transform="matrix(0.6621757835543777,0.9074518356815822,-0.7953951527299465,0.42015612088618526,445.2289464673279,-131.04318262710694)">
                    </circle>
                    <circle r="137.53333333333333" cx="432.4666666666667" cy="376"
                        stroke-width="4.533333333333333" stroke="#a44402" fill="none" opacity="0.76"
                        transform="matrix(0.6850345112096751,0.8993035057561273,-0.7788441161360042,0.4373250559192089,432.3725649904527,-134.65142467013447)">
                    </circle>
                    <circle r="139.82222222222222" cx="424.84444444444443" cy="366.66666666666663"
                        stroke-width="4.655555555555555" stroke="#a44501" fill="none" opacity="0.78"
                        transform="matrix(0.7075355261283482,0.8908303765321662,-0.7616950728615433,0.4543360433066685,419.67772767872907,-138.06656793553384)">
                    </circle>
                    <circle r="142.1111111111111" cx="417.22222222222223" cy="357.3333333333333"
                        stroke-width="4.777777777777778" stroke="#a44501" fill="none" opacity="0.8"
                        transform="matrix(0.7296652932957644,0.8820355082295365,-0.7439543604851854,0.4711829392308929,407.15544547971933,-141.2873789841717)">
                    </circle>
                    <circle r="144.39999999999998" cx="409.6" cy="348" stroke-width="4.8999999999999995"
                        stroke="#a44601" fill="none" opacity="0.82"
                        transform="matrix(0.7514103726008731,0.8729220772698096,-0.725628562094264,0.48785965913873275,394.81645012866227,-144.31269456341693)">
                    </circle>
                    <circle r="146.68888888888887" cx="401.9777777777778" cy="338.66666666666663"
                        stroke-width="5.022222222222222" stroke="#a44601" fill="none" opacity="0.84"
                        transform="matrix(0.7727574222710254,0.8634933751290712,-0.7067245042417261,0.5043601799391038,382.6711602397904,-147.14142202726998)">
                    </circle>
                    <circle r="148.97777777777776" cx="394.35555555555555" cy="329.3333333333333"
                        stroke-width="5.144444444444444" stroke="#a34601" fill="none" opacity="0.86"
                        transform="matrix(0.7936932022304926,0.8537528071491455,-0.6872492548341036,0.5206785421783329,370.72969024436475,-149.7725397309914)">
                    </circle>
                    <circle r="151.26666666666665" cx="386.73333333333335" cy="320"
                        stroke-width="5.266666666666667" stroke="#a34701" fill="none" opacity="0.88"
                        transform="matrix(0.8142045773794975,0.8437038913076974,-0.6672101209519237,0.5368088521925184,359.00183454952025,-152.2050974000863)">
                    </circle>
                    <circle r="153.55555555555554" cx="379.11111111111114" cy="310.66666666666663"
                        stroke-width="5.388888888888888" stroke="#a34701" fill="none" opacity="0.9"
                        transform="matrix(0.8342785207905195,0.8333502569476516,-0.6466146466039828,0.5527452842361326,347.4970822912718,-154.43821647351365)">
                    </circle>
                    <circle r="155.84444444444443" cx="371.4888888888889" cy="301.3333333333333"
                        stroke-width="5.511111111111111" stroke="#a34801" fill="none" opacity="0.92"
                        transform="matrix(0.853902116818553,0.8226956434663927,-0.6254706104169843,0.56848208258609,336.2245735623916,-156.47109042099305)">
                    </circle>
                    <circle r="158.13333333333333" cx="363.8666666666667" cy="292"
                        stroke-width="5.633333333333333" stroke="#a34801" fill="none" opacity="0.94"
                        transform="matrix(0.8730625641219416,0.8117438989652149,-0.6037860232620856,0.58401356362053,325.19313752870823,-158.302985034298)">
                    </circle>
                    <circle r="160.42222222222222" cx="356.24444444444447" cy="282.66666666666663"
                        stroke-width="5.7555555555555555" stroke="#a34801" fill="none" opacity="0.96"
                        transform="matrix(0.8917471785903255,0.8004989788595133,-0.5815691258199853,0.5993341178715562,314.4112460690777,-159.93323869242772)">
                    </circle>
                    <circle r="162.7111111111111" cx="348.62222222222226" cy="273.3333333333333"
                        stroke-width="5.877777777777777" stroke="#a34900" fill="none" opacity="0.98"
                        transform="matrix(0.9099433961761619,0.7889649444502154,-0.5588283860862319,0.6144382120511945,303.887023830814,-161.36126260056392)">
                    </circle>
                    <circle r="165" cx="341" cy="264" stroke-width="6" stroke="#a34900" fill="none"
                        opacity="1"
                        transform="matrix(0.9276387756261879,0.7771459614569709,-0.5355724968185146,0.6293203910498374,293.6282643577654,-162.58654100272327)">
                    </circle>
                </g>
            </svg>
            <h2 class=" text-sm font-poppins text-center">{!! cache('copyright') ?: '&copy; Kurnia Brownies 2025. All Rights Reserved.' !!}</h2>
        </section>
    </div>
</footer>
