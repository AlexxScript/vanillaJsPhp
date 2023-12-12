<?php
session_start();
if (!isset($_SESSION["id_user"])) {
?>
    <?php require_once __DIR__ . "/../components/nav.php" ?>

    <div class="mainContainerHome">
        <svg value="12" class="svg4" viewBox="0 0 43 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 4">
                <path id="Star 2" d="M21.5 1.44891L25.8578 13.3012L25.9782 13.6287H26.3271H40.2435L29.0402 20.8219L28.7026 21.0387L28.841 21.4152L33.1541 33.1458L21.7701 25.8366L21.5 25.6632L21.2299 25.8366L9.84594 33.1458L14.159 21.4152L14.2974 21.0387L13.9598 20.8219L2.75647 13.6287H16.6729H17.0218L17.1422 13.3012L21.5 1.44891Z" stroke="#49A09D" />
            </g>
        </svg>

        <svg class="svg6" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 6">
                <path id="Star 1" d="M15.5 1.5709L18.506 10.5239L18.6204 10.8647H18.98H28.6609L20.8431 16.3615L20.538 16.576L20.6567 16.9297L23.6516 25.8497L15.7876 20.3205L15.5 20.1183L15.2124 20.3205L7.34838 25.8497L10.3433 16.9297L10.462 16.576L10.1569 16.3615L2.33907 10.8647H12.02H12.3796L12.494 10.5239L15.5 1.5709Z" stroke="#5EC451" />
            </g>
        </svg>

        <svg class="svg7" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 7">
                <path id="Ellipse 1" d="M35.5 16.5C35.5 25.2965 27.7068 32.5 18 32.5C8.29317 32.5 0.5 25.2965 0.5 16.5C0.5 7.70351 8.29317 0.5 18 0.5C27.7068 0.5 35.5 7.70351 35.5 16.5Z" stroke="#FAD37B" />
            </g>
        </svg>

        <h1 class="texto">You must log in</h1>
        <svg class="svg8" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 8">
                <path id="Ellipse 2" d="M33.5 19C33.5 29.271 26.0619 37.5 17 37.5C7.93815 37.5 0.5 29.271 0.5 19C0.5 8.72898 7.93815 0.5 17 0.5C26.0619 0.5 33.5 8.72898 33.5 19Z" stroke="#F05365" />
            </g>
        </svg>

        <svg class="svg3" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 3">
                <path id="Star 4" d="M15.5 1.5709L18.506 10.5239L18.6204 10.8647H18.98H28.6609L20.8431 16.3615L20.538 16.576L20.6567 16.9297L23.6516 25.8497L15.7876 20.3205L15.5 20.1183L15.2124 20.3205L7.34838 25.8497L10.3433 16.9297L10.462 16.576L10.1569 16.3615L2.33907 10.8647H12.02H12.3796L12.494 10.5239L15.5 1.5709Z" stroke="#FAD37B" />
            </g>
        </svg>
        <svg class="svg5" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 5">
                <circle id="Ellipse 3" cx="23" cy="23" r="22.5" stroke="#F05365" />
            </g>
        </svg>

        <svg class="svg9" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 9">
                <path id="Star 3" d="M15.5 1.5709L18.506 10.5239L18.6204 10.8647H18.98H28.6609L20.8431 16.3615L20.538 16.576L20.6567 16.9297L23.6516 25.8497L15.7876 20.3205L15.5 20.1183L15.2124 20.3205L7.34838 25.8497L10.3433 16.9297L10.462 16.576L10.1569 16.3615L2.33907 10.8647H12.02H12.3796L12.494 10.5239L15.5 1.5709Z" stroke="#F05365" />
            </g>
        </svg>
    </div>
    <?php require_once __DIR__ . "/../components/footer.php" ?>

<?php } else { ?>

    <?php require_once __DIR__ . "/../components/nav.php" ?>
    <div class="mainContainerHome">
        <svg class="svg4" viewBox="0 0 43 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 4">
                <path id="Star 2" d="M21.5 1.44891L25.8578 13.3012L25.9782 13.6287H26.3271H40.2435L29.0402 20.8219L28.7026 21.0387L28.841 21.4152L33.1541 33.1458L21.7701 25.8366L21.5 25.6632L21.2299 25.8366L9.84594 33.1458L14.159 21.4152L14.2974 21.0387L13.9598 20.8219L2.75647 13.6287H16.6729H17.0218L17.1422 13.3012L21.5 1.44891Z" stroke="#49A09D" />
            </g>
        </svg>

        <svg class="svg6" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 6">
                <path id="Star 1" d="M15.5 1.5709L18.506 10.5239L18.6204 10.8647H18.98H28.6609L20.8431 16.3615L20.538 16.576L20.6567 16.9297L23.6516 25.8497L15.7876 20.3205L15.5 20.1183L15.2124 20.3205L7.34838 25.8497L10.3433 16.9297L10.462 16.576L10.1569 16.3615L2.33907 10.8647H12.02H12.3796L12.494 10.5239L15.5 1.5709Z" stroke="#5EC451" />
            </g>
        </svg>

        <svg class="svg7" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 7">
                <path id="Ellipse 1" d="M35.5 16.5C35.5 25.2965 27.7068 32.5 18 32.5C8.29317 32.5 0.5 25.2965 0.5 16.5C0.5 7.70351 8.29317 0.5 18 0.5C27.7068 0.5 35.5 7.70351 35.5 16.5Z" stroke="#FAD37B" />
            </g>
        </svg>
        <h1><?php echo $_SESSION["user_name"] ?></h1>
        <svg class="svg8" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 8">
                <path id="Ellipse 2" d="M33.5 19C33.5 29.271 26.0619 37.5 17 37.5C7.93815 37.5 0.5 29.271 0.5 19C0.5 8.72898 7.93815 0.5 17 0.5C26.0619 0.5 33.5 8.72898 33.5 19Z" stroke="#F05365" />
            </g>
        </svg>

        <svg class="svg3" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 3">
                <path id="Star 4" d="M15.5 1.5709L18.506 10.5239L18.6204 10.8647H18.98H28.6609L20.8431 16.3615L20.538 16.576L20.6567 16.9297L23.6516 25.8497L15.7876 20.3205L15.5 20.1183L15.2124 20.3205L7.34838 25.8497L10.3433 16.9297L10.462 16.576L10.1569 16.3615L2.33907 10.8647H12.02H12.3796L12.494 10.5239L15.5 1.5709Z" stroke="#FAD37B" />
            </g>
        </svg>
        <svg class="svg5" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 5">
                <circle id="Ellipse 3" cx="23" cy="23" r="22.5" stroke="#F05365" />
            </g>
        </svg>

        <svg class="svg9" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Group 9">
                <path id="Star 3" d="M15.5 1.5709L18.506 10.5239L18.6204 10.8647H18.98H28.6609L20.8431 16.3615L20.538 16.576L20.6567 16.9297L23.6516 25.8497L15.7876 20.3205L15.5 20.1183L15.2124 20.3205L7.34838 25.8497L10.3433 16.9297L10.462 16.576L10.1569 16.3615L2.33907 10.8647H12.02H12.3796L12.494 10.5239L15.5 1.5709Z" stroke="#F05365" />
            </g>
        </svg>
    </div>
    <?php require_once __DIR__ . "/../components/footer.php" ?>

<?php } ?>