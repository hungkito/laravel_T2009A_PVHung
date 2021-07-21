<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="#home" class="w3-bar-item w3-button">Luxury apartment</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
            <a href="#projects" class="w3-bar-item w3-button">Product</a>
            <a href="#about" class="w3-bar-item w3-button">About</a>
            <a href="#contact" class="w3-bar-item w3-button">Contact</a>
        </div>
    </div>
</div>

<div class="w3-content w3-padding" style="max-width:1564px">

    <!-- Project Section -->
    <div class="w3-container w3-padding-32" id="projects">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Product</h3>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Vinhomes Gardenia</div>
                <img src="https://lh3.googleusercontent.com/proxy/Y0zy7LFoErA-lQxXKXjQDrFiM4pfvqTwQDHd6GAmGIA-SivqBXXarhVSxyD8XPTGyXVf2wuoOCrojzWrOEUWXHWK_C8nQWyznM4G2DFRdH4xbVnTYM5pH9IXQL-9tRDS4jtWfYldHeTaBKnR" alt="House" style="width:100%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Ruby Tower</div>
                <img src="https://datxanhmienbac.com.vn/public/uploads/source/du-an-bds/chung-cu/ruby-tower-thanh-hoa/03-min.png" alt="House" style="width:100%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Happy One</div>
                <img src="https://www.happyonebinhduong.com/uploads/canhohappyonebinhduong/gallery/1559633168_happyone11.png" alt="House" style="width:100%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
                <img src="/w3images/house4.jpg" alt="House" style="width:100%">
            </div>
        </div>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
                <img src="/w3images/house2.jpg" alt="House" style="width:99%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
                <img src="/w3images/house5.jpg" alt="House" style="width:99%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
                <img src="/w3images/house4.jpg" alt="House" style="width:99%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
                <img src="/w3images/house3.jpg" alt="House" style="width:99%">
            </div>
        </div>
    </div>
    <!-- Contact Section -->
    <div class="w3-container w3-padding-32" id="contact">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
        <p>Lets get in touch and talk about your next project.</p>
        <form action="/action_page.php" target="_blank">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
            <button class="w3-button w3-black w3-section" type="submit">
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
        </form>
    </div>
</div>
</body>
</html>
