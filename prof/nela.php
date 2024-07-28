<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>khaivanhoutenn's Profile</title>
    <meta name="description" content="Profile Pribadi Khaivanhoitenn, dan kamu dapat mengirimkan pesan Annonymous kepada saya">
    <meta property="og:site_name" content="khaivanhoutenn's Profile">
    <meta property="og:title" content="khaivanhoutenn">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Profile Pribadi Khaivanhoitenn, dan kamu dapat mengirimkan pesan Annonymous kepada saya">
    <meta property="og:image" content="./assets/img/wallpaper/wallpaper.jpg">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./assets/img/profile/profile.jpg" type="image/x-icon">
    <style>
        #music-player {
            display: none;
            opacity: 0;
            transition: opacity 0.5s;
        }
        #music-player.show {
            display: block;
            opacity: 1;
        }
        .play-music-btn, .portfolio-btn {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .play-music-btn:hover, .portfolio-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <button id="play-music-btn" class="play-music-btn">Klik untuk mengirim pesan annonymous.</button>
    <button class="portfolio-btn" onclick="window.location.href='https://bit.ly/khaivanhouten'">Liat portofolio saya</button>
    <div id="music-player">
        <div class="card-container">
            <div class="card nitro-card">
                <div class="card-header">
                    <div style="background: url('./assets/img/profile/banner.gif')" class="banner-img"></div>
                </div>
                <div class="card-body">
                    <div class="profile-header">
                        <div class="profil-logo">
                            <img src="./assets/img/profile/profile.jpg">
                            <img class="avatar-border"
                                src="./assets/img/profile/decoration.png"
                                alt="">
                        </div>
                        <div class="badges-container">
                            <div class="badge-item">
                                <img src="https://cdn.discordapp.com/badge-icons/8a88d63823d8a71cd5e390baa45efa02.png"
                                    alt="">
                                <div class="tooltip tooltip-up">
                                    HypeSquad Bravery
                                </div>
                            </div>
                            <div class="badge-item">
                                <img src="https://cdn.discordapp.com/badge-icons/2ba85e8026a8614b640c2837bcdfe21b.png"
                                    alt="">
                                <div class="tooltip tooltip-up">
                                    Nitro
                                </div>
                            </div>
                            <div class="badge-item">
                                <img src="./assets/img/badges/boost.png" alt="">
                                <div class="tooltip tooltip-up">
                                    Boost Server 46 Month
                                </div>
                            </div>
                            <div class="badge-item">
                                <img src="./assets/img/badges/active-developer.png" alt="Active Developer Badge" style="width: 18px; height: auto;">

                                <div class="tooltip tooltip-up">
                                    Active Developer
                                </div>
                            </div>
                            <div class="badge-item">
                                <img src="https://cdn.discordapp.com/badge-icons/6de6d34650760ba5551a79732e98ed60.png"
                                    alt="">
                                <div class="tooltip tooltip-up">
                                    Original as khaivanhoutenn#0000
                                </div>
                            </div>
                            <div class="badge-item">
                                <img src="https://cdn.discordapp.com/badge-icons/7d9ae358c8c5e118768335dbe68b4fb8.png"
                                    alt="">
                                <div class="tooltip tooltip-up">
                                    Completed a Quest
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-body">
                        <div class="username">
                            khaivanhoutenn<span>#0000</span>
                            <div class="badge">Ratu</div>
                        </div>
                        <hr>
                        <div class="basic-infos">
                            <div class="category-title">About Me</div>
                            <p>
                                development abal-abal!<br>
                                <a href="https://discord.gg/ezcorp" target="_blank">♛〡Project bot ezcorp official</a> <br>
                            </p>
                        </div>
                        <div class="basic-infos">
                            <div class="category-title">Member Since</div>
                            <p>04 April 2024</p>
                        </div>
                        <div class="roles">
                            <div class="category-title">Roles</div>
                            <div class="roles-list">
                                <div class="role">
                                    <div class="role-color" style="background: #f796c8"></div>
                                    <p>ily <3</p>
                                </div>
                                <div class="role">
                                    <div class="role-color" style="background: rgb(255, 0, 212)"></div>
                                    <p>queen lily</p>
                                </div>
                                <div class="role">
                                    <div class="role-color" style="background: rgb(255, 255, 255)"></div>
                                    <p>k</p>
                                </div>
                                <div class="role role-add">
                                    <div class="role-add-text">+</div>
                                </div>
                            </div>
                        </div>
                        <div class="message">
                            <p>Kirim pesan annonymous kalian disini!</p>
                            <input type="text" id="message-input" placeholder="Send a message to @khaivanhoutenn">
                            <p id="message-status"></p>
                        </div>
                    </div>
                </div>
            </div>
            <audio src="./assets/sound/zenlesszonezero.mp3" loop></audio>
        </div>
    </div>
    <script src="dist/main.js"></script>
    <script>
        document.getElementById('message-input').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                const message = e.target.value;
                if (message.trim() !== "") {
                    fetch('annonymous.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ message: message })
                    }).then(response => response.json()).then(data => {
                        document.getElementById('message-status').textContent = "Pesan berhasil terkirim sebagai annonymous!";
                    }).catch(error => {
                        document.getElementById('message-status').textContent = "Pesan berhasil terkirim sebagai annonymous!";
                    });
                }
            }
        });
    </script>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input = json_decode(file_get_contents('php://input'), true);
        if (isset($input['message'])) {
            $message = $input['message'];

            $webhookurl = "https://discord.com/api/webhooks/1266962497403879434/nnErHHa4Uq-OYr5pgic4yY9dQOdlS4bL9G2PXDRvR7sKfcXc4qqHs8n5o6X4VBpvOvVr";
            
            $json_data = json_encode([
                "content" => "<@1218584914405101659> ada pesan annonymous",
                "embeds" => [
                    [
                        "title" => "Pesan dari Annonymous",
                        "description" => $message,
                        "color" => hexdec("f796c8"),
                        "fields" => [
                            [
                                "name" => "Status",
                                "value" => "Pesan baru diterima",
                                "inline" => false
                            ]
                        ],
                        "footer" => [
                            "text" => "Annonymous",
                            "icon_url" => "https://cdn.discordapp.com/attachments/967268135847731290/1267001364534267946/Eye_White.jpg?ex=66a73279&is=66a5e0f9&hm=78b52e14489ff34188f3560cb18d22d3e2d4911a2284cfba214d2b8ef719c757&"
                        ],
                        "timestamp" => date('c', strtotime('now'))
                    ]
                ]
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

            $ch = curl_init($webhookurl);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $response = curl_exec($ch);
            curl_close($ch);
            
            echo json_encode(["status" => "success", "response" => $response]);
        }
    }
    ?>
</body>
</html>
