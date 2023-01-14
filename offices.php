<?php include 'includes/header.php'; ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9TZHXX" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<section class="flat-title-page inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2 class="heading">Offices</h2>
                    <ul class="banner-menu">
                        <li><a href="./">Home</a></li>
                        <li><a>Offices</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section2 p-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="heading-section style-sc home2 wow fadeInUp pt-5" data-wow-delay="0ms"
                    data-wow-duration="1400ms">
                    <!-- <h5 class="wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">Our Locations
                    </h5> -->
                    <h2 class="title-section title-style">Check out our <span class="text-color-8">associate offices </span></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-lg-12">
            <div id="map">
            </div>
        </div>
    </div>
</section>

<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyCzLa8uvrYvNVkr-CO3fT7pfcK_8zD7K08"></script>



<script type="text/javascript">
    var locations = [
        [
            "Location 1",
            "Guntur, Andhra Pradesh",
            "16.31689844899066",
            "80.43949677964143"
        ],
        [
            "Location 2",
            "Kadapa, Andhra Pradesh",
            "14.467354",
            "78.824135"
        ],
        [
            "Location 3",
            "Kurnool, Andhra Pradesh",
            "15.828126",
            "78.037277"
        ],
        [
            "Location 4",
            "Nandyal, Andhra Pradesh",
            "15.478569",
            "78.483093"
        ],
        [
            "Location 5",
            "Rajahmundry, Andhra Pradesh",
            "17.000538",
            "81.804031"
        ],
        [
            "Location 6",
            "Vijayawada, Andhra Pradesh",
            "16.538459459924596",
            "80.60539917303277"
        ],
        [
            "Location 7",
            "Visakhapatnam, Andhra Pradesh",
            "17.658013298288996",
            "83.17053794425057"
        ],
        [
            "Location 8",
            "West Godavari, Andhra Pradesh",
            "17.658013298288996",
            "83.17053794425057"
        ],
        [
            "Location 9",
            "Barpeta, Assam",
            "26.385904878181147",
            "90.94000984484015"
        ],
        [
            "Location 10",
            "Barpeta, Assam",
            "26.385904878181147",
            "90.94000984484015"
        ],
        [
            "Location 11",
            "Guwahati, Assam",
            "26.144502808339773",
            "91.74375818608227"
        ],
        [
            "Location 12",
            "Silchar, Assam",
            "24.84296720517945",
            "92.76733095035685"
        ],
        [
            "Location 13",
            "Silchar, Assam",
            "24.84296720517945",
            "92.76733095035685"
        ],
        [
            "Location 14",
            "Tinsukia, Assam",
            "27.50213836837637",
            "95.35036246433276"
        ],
        [
            "Location 15",
            "Muzaffarpur, Bihar",
            "26.156756494971685",
            "85.35404451385799"
        ],
        [
            "Location 16",
            "Patna, Bihar",
            "25.627214357975205",
            "85.06991234413032"
        ],
        [
            "Location 17",
            "Rohtas, Bihar",
            "25.0950995483089",
            "84.0047470776715"
        ],
        [
            "Location 18",
            "Samastipur, Bihar",
            "25.856914676011687",
            "85.78682325499581"
        ],
        [
            "Location 19",
            "Motihari, Bihar",
            "26.632784405404454",
            "84.9130594372214"
        ],
        [
            "Location 20",
            "Ambikapur, Chhattisgarh",
            "23.127601548057946",
            "83.1731120426163"
        ],
        [
            "Location 21",
            "Bilaspur, Chhattisgarh",
            "26.128021843651688",
            "84.7169915073118"
        ],
        [
            "Location 22",
            "Raipur, Chhattisgarh",
            "21.276288300023776",
            "81.62284690587401"
        ],
        [
            "Location 23",
            "New Delhi, Delhi",
            "28.6291852969155",
            "77.21034717650268"
        ],
        [
            "Location 24",
            "Ahmedabad, Gujarat",
            "23.053671823243047",
            "72.54265205967846"
        ],
        [
            "Location 25",
            "Baroda, Gujarat",
            "22.333838146201863",
            "73.14596082792032"
        ],
        [
            "Location 26",
            "Gandhidham, Gujarat",
            "23.062006732498624",
            "70.09361120674718"
        ],
        [
            "Location 27",
            "Halol, Gujarat",
            "22.513273604017115",
            "73.47032983976803"
        ],
        [
            "Location 28",
            "Himatnagar, Gujarat",
            "23.604319664049502",
            "72.96084366629582"
        ],
        [
            "Location 29",
            "Himatnagar, Gujarat",
            "23.604319664049502",
            "72.96084366629582"
        ],
        [
            "Location 30",
            "Nadiad, Gujarat",
            "22.702936461672916",
            "72.8520307270348"
        ],
        [
            "Location 31",
            "Rajkot, Gujarat",
            "22.2928506535304",
            "70.772198272099"
        ],
        [
            "Location 32",
            "Hisar, Haryana",
            "29.15591918076633",
            "75.69160273238026"
        ],
        [
            "Location 33",
            "Bhiwani, Haryana",
            "28.80174528412342",
            "76.12140514638726"
        ],
        [
            "Location 34",
            "Kurukshetra, Haryana",
            "29.9674924947735",
            "76.88224433084831"
        ],
        [
            "Location 35",
            "Panipat, Haryana",
            "29.38706980879874",
            "76.95999824764648"
        ],
        [
            "Location 36",
            "Rohtak, Haryana",
            "28.902994509282646",
            "76.58438637669349"
        ],
        [
            "Location 37",
            "Bhiwani, Haryana",
            "28.79933844850306",
            "76.12054683955253"
        ],
        [
            "Location 38",
            "Shimla, Himachal Pradesh",
            "31.093797691176416",
            "77.15953554897587"
        ],
        [
            "Location 39",
            "Solan, Himachal Pradesh",
            "30.904272384560315",
            "77.09735998705968"
        ],
        [
            "Location 40",
            "Jammu, J&K",
            "32.68318099702439",
            "74.86606851858704"
        ],
        [
            "Location 41",
            "Srinagar, J&K",
            "34.1020905739264",
            "74.80605787623995"
        ],
        [
            "Location 42",
            "Hazaribagh, Jharkhand",
            "23.993219212346467",
            "85.34520804630142"
        ],
        [
            "Location 43",
            "Jamshedpur, Jharkhand",
            "22.781797367512805",
            "86.20151708714447"
        ],
        [
            "Location 44",
            "Ranchi, Jharkhand",
            "23.363945490152418",
            "85.28492237968715"
        ],
        [
            "Location 45",
            "Bangalore, Karnataka",
            "12.937787212671338",
            "77.56634535255331"
        ],
        [
            "Location 46",
            "Dharwad, Karnataka",
            "15.458286114244299",
            "74.9911419125825"
        ],
        [
            "Location 47",
            "Bijapur, Karnataka",
            "16.834398930687712",
            "75.71015525970675"
        ],
        [
            "Location 48",
            "Davanagere, Karnataka",
            "14.46850212789566",
            "75.89638632332083"
        ],
        [
            "Location 49",
            "Gulbarga, Karnataka",
            "17.357016827516382",
            "76.8299807885601"
        ],
        [
            "Location 50",
            "Kadur, Karnataka",
            "13.549338271346757",
            "76.00752203112481"
        ],
        [
            "Location 51",
            "Kolar, Karnataka",
            "13.13441695711697",
            "78.12092469776339"
        ],
        [
            "Location 52",
            "Mandya, Karnataka",
            "12.522122628453692",
            "76.88753527596693"
        ],
        [
            "Location 53",
            "Thiruvananthapuram, Kerala",
            "8.554711398579254",
            "76.91797446404442"
        ],
        [
            "Location 54",
            "Cochin, Kerala",
            "9.93830373838265",
            "76.26925999719052"
        ],
        [
            "Location 55",
            "Ernakulam, Kerala",
            "9.979658754621672",
            "76.30176714612732"
        ],
        [
            "Location 56",
            "Kollam, Kerala",
            "8.894879783158665",
            "76.61015756470034"
        ],
        [
            "Location 57",
            "Palakkad, Kerala",
            "10.766074131190937",
            "76.65957135938812"
        ],
        [
            "Location 58",
            "Pathanamthitta, Kerala",
            "9.254228928855904",
            "76.7796056343463"
        ],
        [
            "Location 59",
            "Alappuzha, Kerala",
            "9.49527326386386",
            "76.33042985242561"
        ],
        [
            "Location 60",
            "Kottayam, Kerala",
            "9.588530623930458",
            "76.51698704377989"
        ],
        [
            "Location 61",
            "Thellakom, Kerala",
            "9.646562553664754",
            "76.54818531877525"
        ],
        [
            "Location 62",
            "Barwani, Madhya Pradesh",
            "22.037301751818735",
            "74.90393854379313"
        ],
        [
            "Location 63",
            "Bhopal, Madhya Pradesh",
            "23.232162095281666",
            "77.43815211549106"
        ],
        [
            "Location 64",
            "Damoh, Madhya Pradesh",
            "23.820037951717417",
            "79.44123237479"
        ],
        [
            "Location 65",
            "Indore, Madhya Pradesh",
            "22.734044916663898",
            "75.86521148370204"
        ],
        [
            "Location 66",
            "Mandla, Madhya Pradesh",
            "22.598162908095794",
            "80.37076235006997"
        ],
        [
            "Location 67",
            "Ratlam, Madhya Pradesh",
            "23.331491004789118",
            "75.03643707536287"
        ],
        [
            "Location 68",
            "Shahdol, Madhya Pradesh",
            "23.30073148251393",
            "81.36381200262593"
        ],
        [
            "Location 69",
            "Aurangabad, Maharashtra",
            "19.87298849508137",
            "75.33094768865011"
        ],
        [
            "Location 70",
            "Dhule, Maharashtra",
            "20.89789949140076",
            "74.76454449509507"
        ],
        [
            "Location 71",
            "Mumbai, Maharashtra",
            "19.083351215583047",
            "74.76454449509507"
        ],
        [
            "Location 72",
            "Nagpur, Maharashtra",
            "21.14378113354242",
            "79.08555346802164"
        ],
        [
            "Location 72",
            "Nanded, Maharashtra",
            "19.139791240194604",
            "77.32237510473124"
        ],
        [
            "Location 73",
            "Nasik, Maharashtra",
            "19.974171316874624",
            "73.8158375038849"
        ],
        [
            "Location 74",
            "Parbhani, Maharashtra",
            "19.260411087825364",
            "76.77185944730539"
        ],
        [
            "Location 75",
            "Pune, Maharashtra",
            "18.531075449172928",
            "73.83480294974703"
        ],
        [
            "Location 76",
            "Balasore, Odisha",
            "21.492917835828507",
            "86.91126219233195"
        ],
        [
            "Location 77",
            "Bhubaneswar, Odisha",
            "20.296320428203295",
            "85.82250121014796"
        ],
        [
            "Location 77",
            "Cuttack, Odisha",
            "20.463736649562396",
            "85.8780425748629"
        ],
        [
            "Location 78",
            "Ganjam, Odisha",
            "19.387306273876824",
            "85.05206782070174"
        ],
        [
            "Location 79",
            "Puri, Odisha",
            "19.814475476581705",
            "85.83344384292651"
        ],
        [
            "Location 80",
            "Raurkela, Odisha",
            "22.195123734303817",
            "84.8636312863901"
        ],
        [
            "Location 81",
            "Sambalpur, Odisha",
            "21.47902056006211",
            "83.97820396750846"
        ],
        [
            "Location 82",
            "Sangrur, Punjab",
            "30.246360827636927",
            "75.83986691651617"
        ],
        [
            "Location 83",
            "Bathinda, Punjab",
            "30.246360827636927",
            "75.83986691651617"
        ],
        [
            "Location 84",
            "Chandigarh, Punjab",
            "30.735062649827718",
            "76.77794575793669"
        ],
        [
            "Location 85",
            "Ludhiana, Punjab",
            "30.897380373856983",
            "75.85255063444443"
        ],
        [
            "Location 86",
            "Mohali, Punjab",
            "30.701552490642854",
            "76.70218422047057"
        ],
        [
            "Location 87",
            "Patiala, Punjab",
            "30.346340207514377",
            "76.3836452111714"
        ],
        [
            "Location 88",
            "Ajmer, Rajasthan",
            "26.448615395776393",
            "74.62815775395399"
        ],
        [
            "Location 89",
            "Banswara, Rajasthan",
            "23.54612610140363",
            "74.43377656586641"
        ],
        [
            "Location 90",
            "Bharatpur, Rajasthan",
            "27.220990352539914",
            "77.48740735600575"
        ],
        [
            "Location 91",
            "Bikaner, Rajasthan",
            "28.029889299864838",
            "73.31850987867018"
        ],
        [
            "Location 92",
            "Chittaurgarh, Rajasthan",
            "24.88457816097852",
            "74.624337904119"
        ],
        [
            "Location 93",
            "Dausa, Rajasthan",
            "26.897837838819573",
            "76.3385861451947"
        ],
        [
            "Location 94",
            "Jaipur, Rajasthan",
            "26.905962379852063",
            "75.78162009267133"
        ],
        [
            "Location 95",
            "Jhalawar, Rajasthan",
            "24.597403442345804",
            "76.16009617852573"
        ],
        [
            "Location 96",
            "Jodhpur, Rajasthan",
            "26.24232351292805",
            "73.01852410454065"
        ],
        [
            "Location 97",
            "Udaipur, Rajasthan",
            "24.619194449797494",
            "73.7004060208507"
        ],
        [
            "Location 98",
            "Barmer, Rajasthan",
            "25.764558608084382",
            "71.39899773704924"
        ],
        [
            "Location 99",
            "Chennai, Tamil Nādu",
            "13.089626088454049",
            "80.25981126634267"
        ],
        [
            "Location 100",
            "Coimbatore, Tamil Nādu",
            "11.012394439558435",
            "76.9508828171943"
        ],
        [
            "Location 101",
            "Erode, Tamil Nādu",
            "11.349821887884952",
            "77.70217825997855"
        ],
        [
            "Location 102",
            "Kancheepuram, Tamil Nādu",
            "12.820127469152371",
            "79.69508639983749"
        ],
        [
            "Location 103",
            "Krishnagiri, Tamil Nādu",
            "12.527738731307808",
            "78.2151720287584"
        ],
        [
            "Location 104",
            "Madurai, Tamil Nādu",
            "9.917153209202228",
            "78.11389418667544"
        ],
        [
            "Location 105",
            "Namakkal, Tamil Nādu",
            "11.226125114287619",
            "78.1694560529009"
        ],
        [
            "Location 106",
            "Palani, Tamil Nādu",
            "10.450562144931702",
            "77.51566565133993"
        ],
        [
            "Location 107",
            "Pondicherry, Tamil Nādu",
            "11.944012805745787",
            "79.80339459486237"
        ],
        [
            "Location 108",
            "Salem, Tamil Nādu",
            "11.666839906073001",
            "78.131771007511"
        ],
        [
            "Location 109",
            "Vellore, Tamil Nādu",
            "12.90398461833675",
            "79.11215949041419"
        ],
        [
            "Location 110",
            "Villupuram, Tamil Nādu",
            "11.940392457933063",
            "79.48800657473045"
        ],
        [
            "Location 111",
            "Adilabad, Telangana",
            "19.667435695604226",
            "78.52347060338455"
        ],
        [
            "Location 112",
            "Hyderabad, Telangana",
            "17.448585323518873",
            "78.41964665431333"
        ],
        [
            "Location 113",
            "Miryalguda, Telangana",
            "16.86881226281472",
            "79.55470036314293"
        ],
        [
            "Location 114",
            "Rangareddy, Telangana",
            "17.094707554982204",
            "78.49191662442271"
        ],
        [
            "Location 115",
            "Aligarh, Uttar Pradesh",
            "27.90183386919935",
            "78.08249592670076"
        ],
        [
            "Location 116",
            "Allahabad, Uttar Pradesh",
            "25.44498774728638",
            "81.83109881009437"
        ],
        [
            "Location 117",
            "Bareilly, Uttar Pradesh",
            "28.37213390164751",
            "79.43292332408093"
        ],
        [
            "Location 118",
            "Budaun, Uttar Pradesh",
            "28.031218861461447",
            "79.12761150595553"
        ],
        [
            "Location 119",
            "Fatehpur, Uttar Pradesh",
            "25.921681012119922",
            "80.80083780128271"
        ],
        [
            "Location 120",
            "Noida, Uttar Pradesh",
            "28.54845779568561",
            "77.37568054050851"
        ],
        [
            "Location 121",
            "Ghaziabad, Uttar Pradesh",
            "28.673076884146262",
            "77.44926214400685"
        ],
        [
            "Location 122",
            "Gorakhpur, Uttar Pradesh",
            "26.758180034770124",
            "83.38571265584555"
        ],
        [
            "Location 123",
            "Kanpur, Uttar Pradesh",
            "26.449992835119442",
            "80.31632990826074"
        ],
        [
            "Location 124",
            "Kushinagar, Uttar Pradesh",
            "26.740239110694414",
            "83.88757907626807"
        ],
        [
            "Location 125",
            "Lucknow, Uttar Pradesh",
            "26.855361714245902",
            "80.93082840753368"
        ],
        [
            "Location 126",
            "Mainpuri, Uttar Pradesh",
            "27.226764772157775",
            "79.01961758109054"
        ],
        [
            "Location 127",
            "Meerut, Uttar Pradesh",
            "28.98989730447565",
            "77.70855379564836"
        ],
        [
            "Location 128",
            "Rampur, Uttar Pradesh",
            "28.799428336603363",
            "79.02023864432132"
        ],
        [
            "Location 129",
            "Sitapur, Uttar Pradesh",
            "27.562822665456267",
            "80.67657848165028"
        ],
        [
            "Location 130",
            "Dehradun, Uttarakhand",
            "30.320371778184114",
            "78.0291481886428"
        ],
        [
            "Location 131",
            "Udham Singh Nagar, Uttarakhand",
            "28.998801666648404",
            "79.35913432077655"
        ],
        [
            "Location 132",
            "Kolkata, West Bengal",
            "22.529704147349243",
            "88.34322995485611"
        ],
        [
            "Location 133",
            "Murshidabad, West Bengal",
            "24.176505530559723",
            "88.27986646129821"
        ],
        [
            "Location 134",
            "Nadia, West Bengal",
            "22.708327564712803",
            "88.75243164723986"
        ],
        [
            "Location 135",
            "Medinipur, West Bengal",
            "22.437401013524553",
            "87.31598779868536"
        ],
        [
            "Location 135",
            "Malda, West Bengal",
            "25.011650550746307",
            "88.14127259706378"
        ]
    ];

    gmarkers = [];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: new google.maps.LatLng(21.221800, 72.879570),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();


    function createMarker(latlng, html) {
        var marker = new google.maps.Marker({
            position: latlng,
            map: map
        });

        google.maps.event.addListener(marker, 'click', function () {
            infowindow.setContent(html);
            infowindow.open(map, marker);
        });
        return marker;
    }

    for (var i = 0; i < locations.length; i++) {
        gmarkers[locations[i][0]] =
            createMarker(new google.maps.LatLng(locations[i][2], locations[i][3]), locations[i][0] + "<br>" + locations[
                i][1]);
    }

    function abc(id, argument) {
        var id = id;
        $("#" + id).attr('href', "javascript:google.maps.event.trigger(gmarkers['" + argument + "'],'click');");
        $('html, body').animate({
            scrollTop: $("#map").offset().top - 100
        }, "slow");



    }
</script>

<?php include 'includes/footer.php'; ?>