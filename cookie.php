<div class="wrapper12" style="z-index:9999999999999">
    <header class="header12">
        <i class="bx bx-cookie i1"></i>
        <h2 class="h21">Cookies Consent</h2>
    </header>

    <div class="data">
        <p class="p1">This website use cookies to help you have a superior and more relevant browsing experience on the website. <a href="#"> Read more...</a></p>
    </div>

    <div class="buttons">
        <button class="button" id="acceptBtn">Accept</button>
        <button class="button" id="declineBtn">Decline</button>
    </div>
</div>

<!-- Boxicons CSS -->
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
<style>
    /* Google Fonts - Roboto */
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600&display=swap");


    .wrapper12 {
        position: fixed;
        bottom: 50px;
        right: -370px;
        max-width: 345px;
        width: 100%;
        background: #fff;
        border-radius: 8px;
        padding: 15px 25px 22px;
        transition: right 0.3s ease;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .wrapper12.show {
        right: 20px;
    }

    .wrapper12 header12 {
        display: flex;
        align-items: center;
        column-gap: 15px;
    }

    header12 .i1 {
        color: #4070f4;
        font-size: 32px;
    }

    header12 .h21 {
        color: #4070f4;
        font-weight: 500;
    }

    .wrapper12 .data {
        margin-top: 16px;
    }

    .wrapper12 .data .p1 {
        color: #333;
        font-size: 16px;
    }

    .data .p1 .a1 {
        color: #4070f4;
        text-decoration: none;
    }

    .data .p1 .a1:hover {
        text-decoration: underline;
    }

    .wrapper12 .buttons {
        margin-top: 16px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .buttons .button {
        border: none;
        color: #fff;
        padding: 8px 0;
        border-radius: 4px;
        background: #20618F;
        cursor: pointer;
        width: calc(100% / 2 - 10px);
        transition: all 0.2s ease;
    }

    .buttons #acceptBtn:hover {
        background-color: #20618F;
    }

    #declineBtn {
        border: 2px solid #20618F;
        background-color: #fff;
        color: #20618F;
    }

    #declineBtn:hover {
        background-color: #20618F;
        color: #fff;
    }
</style>
<script>
    const cookieBox = document.querySelector(".wrapper12"),
        buttons = document.querySelectorAll(".button");

    const executeCodes = () => {
        //if cookie contains codinglab it will be returned and below of this code will not run
        if (document.cookie.includes("codinglab")) return;
        cookieBox.classList.add("show");

        buttons.forEach((button) => {
            button.addEventListener("click", () => {
                cookieBox.classList.remove("show");

                //if button has acceptBtn id
                if (button.id == "acceptBtn") {
                    //set cookies for 1 month. 60 = 1 min, 60 = 1 hours, 24 = 1 day, 30 = 30 days
                    document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
                }
            });
        });
    };

    //executeCodes function will be called on webpage load
    window.addEventListener("load", executeCodes);
</script>