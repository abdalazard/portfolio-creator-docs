<?php
require __DIR__ . '/vendor/autoload.php';

require "src/Updates.php";

$updates = new Updates();
$version = $updates->getVersion();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Creator Docs</title>
    <link rel="icon" href="icon.png">
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <link rel="stylesheet" href="https://stackedit.io/style.css" />
    <link rel="stylesheet" href="./style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="stackedit">

    <div class="stackedit__html">
        <div class="logo">
            <p><a href="https://github.com/abdalazard/PortfolioCreator"><img
                        src="https://raw.githubusercontent.com/abdalazard/PortfolioCreator/main/icon/icon.png"
                        alt="LOGO">
                </a>
            </p>
        </div>

        <!-- Modal -->
        <div class="modalDonate" id="modalDonate">
            <a class="closeButtonStyle close" id="closeButton" href="#">X</a>
            <a href="./donate.php" class="modalText">
            <h2 id="dynamicTitle" class="dynamicTitle"></h2>
            <h2 id="modalTextC" class="modalText"></h2>
            <p id="modalText" class="modalText"></p>
                <p id="modalTextB" class="modalText"></p>
            </a>
        </div>
        <!-- Modal -->

        <p>This project is a PHP-based portfolio creator that stores
            standardized data in a MySQL database. Additionally, it provides
            users with the ability to create their own custom templates.</p>
        <p>Repo: <a
                href=" https://github.com/abdalazard/PortfolioCreator">https://github.com/abdalazard/PortfolioCreator
            </a>
        </p>
        <h2 id="current-project-status">Current Project Status</h2>
        <ul>
            <li><s><strong>Step 1 Completed:</strong> Implementation of the
                    portfolio builder.</s></li>
            <li><s><strong>Step 2 Completed:</strong> working on
                    the portfolio editing feature and deletion
                    option.</s></li>
            <li><s><strong>Step 3 Completed:</strong> Developing the
                    template system and the ability to select different
                    styles.</s></li>
            <li><s><strong>Step 4 Completed:</strong> Testing - Working at</s></li>
            <li><s><strong>Step 5 Completed:</strong> Update user data
                    modal.</s></li>
            <li><s><strong>Step 6 Completed:</strong> Documentation and project published.</s></li>
        </ul>
        <p><img
                src="http://img.shields.io/static/v1?label=STEP%207%20-%20WORKING%20ON%20IT&amp;message=FOCUSING%20ON%20IMPROVEMENTS&amp;color=GREEN&amp;style=for-the-badge">
            <?php
        if($version) {
            if(count($version) >= 0){ ?>
        <h2 id="current-project-status">Updated versions</h2>
        <div>
            <h3>Legend for Release Version Status:</h3>
            <ul>
                <li>✅ - Stable</li>
                <li>🚧 - Pre-release - Unstable</li>
                <li>🚩 - Not recommended</li>
            </ul>
        </div>
        <div class="update-box">
            <?php foreach($version as $update) { ?>
            <div class="update">
                <a href="#update-1" style="text-decoration: none; color:rgba(0, 0, 0, 0.6);" class="update-header">
                    <h2 class="update-title"><?php echo $update['title']; ?> </h2>
                    <h6 class="update-date">Publish date: <?php echo date('d/m/y', strtotime($update['date'])) ?> -
                        <?php if($update['status'] == 1) { ?> ✅ <?php }
                        elseif($update['status'] == 2)
                        {?> 🚧 <?php } else {?> 🚩 <?php } ?>
                    </h6>
                </a>
                <div class="update-content">
                    <p><strong>Details about the upgrade:</strong></p>
                    <ul>
                        <?php foreach($update['descriptions'] as $description) { ?>
                        <ol>- <?php echo $description['description']; ?></ol>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <?php }} ?>
        </div>
        <p hidden>aaa</p>

        <?php } ?>

        <h2 id="contributions">Contributions</h2>
        <p>This project is open source, and contributions are highly
            welcome! If you have ideas, suggestions, or corrections, feel
            free to <a href="https://github.com/abdalazard/Portfolio-Creator/issues/new">open
                an issue</a> or submit a <a href="https://github.com/abdalazard/Portfolio-Creator/compare">pull
                request</a>.</p>
        <h2 id="technologies-used">Technologies Used</h2>
        <ul>
            <li><strong>Backend:</strong> PHP 7.4.33</li>
            <li><strong>Frontend:</strong> jQuery 3.5.1</li>
            <li><strong>Database:</strong> MySQL 8.0.30</li>
        </ul>
        <h2 id="how-to-contribute">How to Contribute</h2>
        <ol>
            <li>
                <p><strong>Fork</strong> the <a href="https://github.com/abdalazard/PortfolioCreator">repository</a></p>
            </li>
            <li>
                <p><strong>Create</strong> a branch for your contribution (<code>git checkout
              -b new-feature</code>)</p>
            </li>
            <li>
                <p><strong>Make</strong> desired changes and <strong>commit</strong> (<code>git commit -m
              'Adding new feature'</code>)</p>
            </li>
            <li>
                <p><strong>Push</strong> to the branch (<code>git push origin
              new-feature</code>)</p>
            </li>
            <li>
                <p><strong>Open</strong> a <a href="https://github.com/abdalazard/Portfolio-Creator/compare">pull
                        request</a>.</p>
            </li>

        </ol>
        <h2 id="how-to-contribute">What I need to know before start the
            project</h2>

        <ul>
            <p>Create a .env file. In terminal line, write: <code>touch
            db/.env</code>. Now you’ll find the .env inside of
                db/ folder.</p>
        </ul>
        <ul>
            <p><strong>Create a empty database</strong> for this project
                and then fill up the .env file with your database
                information:</p>
        </ul>
        <pre style="width: 500px;"><code>
            PROJECT_NAME = mydatabase
            
            DB_HOST = localhost
            
            DB_USERNAME = root
            
            DB_PASSWORD = mypassword
            
            MY_PORTFOLIO_NAME = mydatabase
            
            MY_PORTFOLIO_PAG = https://my-website.com
        </code></pre>
        <ol start="4">
            <p>In terminal, install all dependencies: <code>composer
              install</code></p>

            <p>For the last, in terminal command line you need to write
                the next command line to create your user access:
                <code>php migrate.php</code>
            </p>
        </ol>
        <p><strong>Default user:</strong></p>
        <pre style="width: 500px;"><code>
            Login: admin<br>
            Default password: 123
      </code></pre>

        <p style="text-align:center;"><strong>I appreciate your contributions in advance! 👍</strong></p>

        <h2 id="how-to-contribute">How to create and work your own template:</h2>
        <p>On the template preview page, you can create a new one by
            clicking the button "<strong>Create template</strong>".
            Upon entering the name and clicking create, a folder with three files
            (<strong>HTML</strong>, <strong>CSS</strong> and
            <strong>JavaScript</strong>) bearing the same name as your template
            will be created in the templates folder. You can edit these files and
            see the results on the template preview page.
        </p>


        <h2 id="about-the-author">About the author</h2>
        <img src="author.jpg" alt="Vinicius. Abdala" style="border-radius: 50%; width: 100px; height: 100px;">
        <p><strong>Vinícius "Abdalazard" Abdala</strong> is a software
            developer passionate about technology. He has experience in
            several
            programming languages, including PHP, JavaScript, and SQL. Also
            he worked and works in big projects, using technologies like
            React.js, React Native and jQuery. He believes in the power of
            open source and loves
            contributing to open source projects in his free time and giving
            workshops. You can follow him on GitHub at
            <a href="https://github.com/abdalazard">github.com/abdalazard</a> or in
            his <a href="https://abdalazard.online">website</a>.
        </p>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('a[href^="#update"]').on('click', function(e) {
        e.preventDefault();

        $(this).next('.update-content').slideToggle('slow');
    });

    //Traduz donate 
    let pais;

    fetch('https://api.ipify.org?format=json')
        .then(response => response.json())
        .then(data => {
            const ip = data.ip;
            fetch(`https://ipapi.co/${ip}/json`)
                .then(response => response.json())
                .then(data => {
                    pais = data.country_name;

                    if (pais == "Brazil") {
                        $('#dynamicTitle').text('Doe e ajude o projeto!');
                        $('#modalTextC').text('PIX:');

                         $('#modalTextB').text(
                             `Sua contribuição pode nos ajudar a manter e melhorar este projeto. Se você o considera valioso e deseja apoiar seu desenvolvimento contínuo, por favor, considere fazer uma doação. Cada pequena contribuição ajuda a manter o projeto no ar e a receber atualizações!`
                         );
                        $('#modalText').html('<img src="./qr_vinicius.png" alt="QR Code para doação">');
                    } else {
                        $('#dynamicTitle').text('Donate to Support the Project!');
                        $('#modalTextC').text('PIX:');

                        $('#modalTextB').text(`
                        Your contribution can help us maintain 
                        and improve this project. If you find it 
                        valuable and want to support its continued 
                        development, please consider making a donation. 
                        Every little bit helps keep the project online and getting updates`);
                        $('#modalText').html('<img src="./qr_vinicius.png" alt="QR Code para doação">');
                    }
                    $('#modalDonate').show();

                });
        });


    $('#closeButton').hide();

    setTimeout(() => {
        $('#modalDonate').hide();
    }, 30000)
    $('#closeButton').fadeIn(5000);

    $('#closeButton').on('click', function(event) {
        $('#modalDonate').hide();
    });

    $(window).on('click', function(event) {
        if (event.target == $('#modalText')[0]) {
            $('#modalDonate').hide();
        }
    });
});
</script>

</html>