<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
/* Global Variables */
:root {
    --color1: #eee;
    --color2: #ed4c21;
    --color2Hover: #95290c;
    --color3: #112231;
    --color4: #f2f8fa;
    --color5: #7b7b7b;
    --color6: #81b73e;
    
    --mainLineHeight: 1.6;
    --sectionPadding: 55px;
    --smallSectionPadding: 15px;
}

/* Reset Default Settings */
* {
    box-sizing: border-box;
    margin: 0;
}

body {
    background-color: var(--color1);
    min-height: 100vh;
    font-family: 'Open Sans', sans-serif;
}

.container {
    max-width: 500px;
    padding: 0 15px;
    margin: 0 auto;
}

/* Section 1 - Beginning */
.section1 {
    padding-top: var(--smallSectionPadding);
    position: relative;

    /* Flex */
    display: flex;
    justify-content: center;
}

.section1__img {
    display: block;
    width: 100%;
    height: 145px;
    border-radius: 4px;
    overflow: hidden;
    position: absolute;

    /* Background */
    background-image: url(https://callcenter.greenwebbtech.com/public/img/2.PNG);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.section1__img::before {
    background-color: var(--color2);
    width: 100%;
    height: 100%;
    opacity: 0.8;

    content: '';
    position: absolute;
}

.section1__content {
    width: fit-content;
    display: flex;
}

.section1__adCard {
    background-color: var(--color3);
    width: fit-content;
    padding: 25px 18px;
    margin: 18px 0 0 10px;
    border-radius: 4px;
    position: relative;
}

.section1__adCardTitle {
    color: var(--color1);
    font-weight: 400;
}

.section1__adCardSeparator {
    display: block;
    background-color: var(--color2);
    width: 26px;
    height: 2px;
    margin: 17px 0;
}

.section1__adCardFeatures {
    /* Flex */
    display: flex;
    flex-direction: column;
}

.section1__adCardFeature {
    color: var(--color1);
    font-size: 14px;
}

.section1__adCardFeature:not(.section1__adCardFeature:last-of-type) {
    margin-bottom: 10px;
}

.section1__adCardFeatureIcon {
    color: var(--color6);
    width: 10px;
    height: 10px;
    margin-right: 3px;
}

.section1__adCardLink {
    display: block;
    background-color: var(--color2);
    color: var(--color1);
    width: fit-content;
    padding: 10px 15px;
    margin: 20px auto 0;
    text-decoration: none;
    border-radius: 2px;
}

.section1__adCardLink:hover {
    background-color: var(--color2Hover);
}

.section1__desc {
    color: var(--color3);
    max-width: 240px;
    height: fit-content;
    padding: 15px;
    margin: calc(145px + 20px) 0 0 20px;
    font-size: 14px;
    line-height: var(--mainLineHeight);
    border: solid 2px var(--color2);
}
/* Section 1 - Ending */

/* Section 2 - Beginning */
.section2 {
    padding: var(--sectionPadding) 0;
}

.section2__cards {
    /* Grid */
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(135px, 1fr));
    gap: 20px;
}

.section2__card {
    background-color: var(--color4);
    padding: 25px 15px;
    border-radius: 2px;
}

.section2__cardNumber {
    color: var(--color2);
    font-size: 18px;
    font-weight: 600;
}

.section2__cardTitle {
    color: var(--color3);
    margin: 15px 0;
    font-size: 18px;
    font-weight: 500;
    line-height: var(--mainLineHeight);
}

.section2__cardDesc {
    color: var(--color5);
    margin-bottom: 15px;
    font-size: 15px;
    line-height: var(--mainLineHeight);
}

.section2__cardLink {
    color: var(--color2);
    font-size: 15px;
    text-decoration: none;
}

.section2__cardLink:hover {
    text-decoration: underline;
}

.section2__cardLinkIcon {
    color: var(--color2);
    width: 10px;
    height: 10px;
    margin-left: 2px;
}

@keyframes changePosition {
    to {
        transform: translateX(5px);
    }
}
.section2__cardLink:hover .section2__cardLinkIcon {
    /* Animation */
    animation-name: changePosition;
    animation-duration: 0.5s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-out;
}
/* Section 2 - Ending */

/* Section 3 - Beginning */
.section3 {
    padding-bottom: var(--smallSectionPadding);
}

.section3__content {
    border-radius: 4px;
    overflow: hidden;

    /* Background */
    background-image: url(https://raw.githubusercontent.com/mohammadjarabah/codepen-assets/main/pens/MWvLGpa/images/city.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;

    /* Position */
    position: relative;
    z-index: 1;

    /* Flex */
    display: flex;
    justify-content: center;
}

.section3__content::before {
    background-color: var(--color3);
    width: 100%;
    height: 100%;
    opacity: 0.8;

    content: '';
    position: absolute;
    z-index: -1;
}

.section3__img {
    display: block;
    width: 230px;
    height: 230px;
    margin-right: 20px;
    border-radius: 2px;
    align-self: center;

    /* Background */
    background-image: url(https://raw.githubusercontent.com/mohammadjarabah/codepen-assets/main/pens/MWvLGpa/images/buildings.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.section3__info {
    padding: 25px 20px;

    /* Flex */
    display: flex;
    flex-direction: column;
}

.section3__title {
    color: var(--color1);
}

.section3__separator {
    display: block;
    background-color: var(--color2);
    width: 26px;
    height: 2px;
    margin: 17px 0;
}

.section3__desc {
    color: var(--color1);
    max-width: 250px;
    padding: 0 5px;
    margin: 10px 0 20px;
    font-size: 15px;
    line-height: var(--mainLineHeight);
}

.section3__link {
    display: block;
    background-color: var(--color2);
    color: var(--color1);
    width: fit-content;
    padding: 10px 15px;
    font-size: 13px;
    text-decoration: none;
    border-radius: 2px;
}

.section3__link:hover {
    background-color: var(--color2Hover);
}
/* Section 3 - Ending */
    </style>
</head>

<body>
    <div class='container'>
        <!-- Section 1 - Beginning -->
        <div class='section1'>
          <!-- Image -->
          <span class='section1__img'></span>
          <!-- Content -->
          <div class='section1__content'>
            <!-- AD Card -->
            <div class='section1__adCard'>
              <h1 class='section1__adCardTitle'>Welcome<br>to<br>Business Process Outsourcing (BPO)</h1>
              <span class='section1__adCardSeparator'></span>
              <div class='section1__adCardFeatures'>
                <p class='section1__adCardFeature'>
                  <svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='check' class='svg-inline--fa fa-check fa-w-16 section1__adCardFeatureIcon' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='currentColor' d='M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z'></path></svg>
                  Outsourcing
                </p>
                <p class='section1__adCardFeature'>
                  <svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='check' class='svg-inline--fa fa-check fa-w-16 section1__adCardFeatureIcon' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='currentColor' d='M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z'></path></svg>
                  Online Interview
                </p>
                <p class='section1__adCardFeature'>
                  <svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='check' class='svg-inline--fa fa-check fa-w-16 section1__adCardFeatureIcon' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='currentColor' d='M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z'></path></svg>
                  Freelance
                </p>
                <p class='section1__adCardFeature'>
                  <svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='check' class='svg-inline--fa fa-check fa-w-16 section1__adCardFeatureIcon' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='currentColor' d='M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z'></path></svg>
                  Cost Saving
                </p>
                <p class='section1__adCardFeature'>
                  <svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='check' class='svg-inline--fa fa-check fa-w-16 section1__adCardFeatureIcon' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='currentColor' d='M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z'></path></svg>
                  Business Process
                </p>
              </div>
              <!-- <a href='#emptyLink' class='section1__adCardLink'>Register Now</a> -->
            </div>
            <!-- Description -->
            <p class='section1__desc'>Hi {{ $data['name'] }}, Your request has been successfully submitted and is currently undergoing a 24-hour review process.</p>
          </div>
        </div>
        <!-- Section 1 - Ending -->
      
        <!-- Section 2 - Beginning -->
        <!-- <div class='section2'>
          <div class='section2__cards'>
            
            <div class='section2__card'>
              <p class='section2__cardNumber'>01</p>
              <p class='section2__cardTitle'>OUTSOURCING</p>
              <p class='section2__cardDesc'>Expand access to a 
                wider network of skilled 
                professionals in 
                Agronomy and 
                Livestock outside your 
                staff compliment.</p>
              <a href='#emptyLink' class='section2__cardLink'>
                Learn more
                <svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='arrow-right' class='svg-inline--fa fa-arrow-right fa-w-14 section2__cardLinkIcon' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path fill='currentColor' d='M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z'></path></svg>
              </a>
            </div>
      
            
            <div class='section2__card'>
              <p class='section2__cardNumber'>02</p>
              <p class='section2__cardTitle'>MYMAIL COMPATIBLE</p>
              <p class='section2__cardDesc'>Lorem ipsum dolor sit amet consectetur.</p>
              <a href='#emptyLink' class='section2__cardLink'>
                Learn more
                <svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='arrow-right' class='svg-inline--fa fa-arrow-right fa-w-14 section2__cardLinkIcon' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path fill='currentColor' d='M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z'></path></svg>
              </a>
            </div>
      
            
            <div class='section2__card'>
              <p class='section2__cardNumber'>03</p>
              <p class='section2__cardTitle'>STAMPREADY BUILDER'S</p>
              <p class='section2__cardDesc'>Lorem ipsum dolor sit amet consectetur.</p>
              <a href='#emptyLink' class='section2__cardLink'>
                Learn more
                <svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='arrow-right' class='svg-inline--fa fa-arrow-right fa-w-14 section2__cardLinkIcon' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path fill='currentColor' d='M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z'></path></svg>
              </a>
            </div>
          </div>
        </div> -->
        <!-- Section 2 - Ending -->
      
        <!-- Section 3 - Beginning -->
        <div class='section3' style="margin-top: 2%;">
          <div class='section3__content'>
            <div class='section3__info'>
              <h3 class='section3__title'>EcoAgro</h3>
              <span class='section3__separator'></span>
              <p class='section3__desc'>At EcoAgro, we believe that the key to global food security lies in sustainable agriculture. To be sustainable, farmers must take care of their environment by using the best agronomic and farming practices. We recognise the knowledge gap existing among Zambian small to medium scale farmers that limit their level of productivity. That is why EcoAgro has created a phone service that will allow farmers to dial in and consult on any farming tip in Agronomy, Crop Protection or Livestock from the comfort of their home.</p>
              <a href='https://ecoagrozm.com/' class='section3__link'>LEARN MORE</a>
            </div>
            <span class='section3__img'></span>
          </div>
        </div>
        <!-- Section 3 - Ending -->
      </div>
</body>
</html>