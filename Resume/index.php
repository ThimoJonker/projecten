<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 18-11-2015
 * Time: 16:24
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo basename(__DIR__); ?></title>
<!--    <link rel="stylesheet" href="../../css/bootstrap.min.css">-->
    <link rel="stylesheet" href="fontello/css/fontello.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/cols.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">
    <div class="resume">
        <div class="header">
            <div class="name"><h2>Thimo Jonker</h2></div>
            <div class="name-job"><h3>Web developer</h3></div>

            <div class="header-information">
                <span>+0222 1234 5678</span><span>info@thimojonker.nl</span><span>www.thimojonker.nl</span><span>Zaandam, Nederland</span>
            </div>
        </div>

        <div class="col-left">
            <div class="about-me">
                <div class="title-header">
                    <h2><span class="plus">+</span></h2>
                    <h2>About me</h2>
                </div>
                <div class="content-data">
                    <table>
                        <tr>
                            <td class="q">Name:</td>
                            <td class="a">Thimo Jonker</td>
                        </tr>
                        <tr>
                            <td class="q">Date of Birth:</td>
                            <td class="a">8th Nov, 1997</td>
                        </tr>
                        <tr>
                            <td class="q">Current Study:</td>
                            <td class="a">SE</td>
                        </tr>
                        <tr>
                            <td class="q">Nationality:</td>
                            <td class="a">Dutch</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="my-skills">
                <div class="skills-header title-header">
                    <h2><span class="plus">+</span></h2>
                    <h2>My skills</h2>
                </div>
                <div class="skills-content content-data">
                    <table>
                        <tr>
                            <td class="q">HTML</td>
                            <td class="bar-skills html"></td>
                        </tr>
                        <tr>
                            <td class="q">CSS</td>
                            <td class="bar-skills css"></td>
                        </tr>
                        <tr>
                            <td class="q">Javascript</td>
                            <td class="bar-skills js"></td>
                        </tr>
                        <tr>
                            <td class="q">C#</td>
                            <td class="bar-skills cs"></td>
                        </tr>
                        <tr>
                            <td class="q">PHP</td>
                            <td class="bar-skills php"></td>
                        </tr>
                        <tr>
                            <td class="q">SQL</td>
                            <td class="bar-skills sql"></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="languages">
                <div class="title-header">
                    <h2><span class="plus">+</span></h2>
                    <h2>Languages</h2>
                </div>
                <div class="skills-content content-data">
                    <table>
                        <tr>
                            <td class="q">Dutch</td>
                            <td class="bar-skills dutch"></td>
                        </tr>
                        <tr>
                            <td class="q">English</td>
                            <td class="bar-skills english"></td>
                        </tr>
                        <tr>
                            <td class="q">German</td>
                            <td class="bar-skills german"></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="reference">
                <div class="title-header">
                    <h2><span class="plus">+</span></h2>
                    <h2>REFERENCE</h2>
                </div>
                <div class="content-data">
                    <p><b>Thimo Jonker</b></p>
                    <p>www.thimojonker.nl</p>
                    <p>+0222 1234 5678</p>
                    <p>info@thimojonker.nl</p>
                </div>


            </div>
        </div>

        <div class="streep"></div>

        <div class="col-right">
            <div class="work-experiences">
                <div class="title-header">
                    <h2><span class="plus">+</span></h2>
                    <h2>EDUCATION</h2>
                </div>
                <div class="work-content content-data">
                    <table>
                        <tr>
                            <td class="work-name">SE (future)</td>
                            <td class="work-place ver-top ">Hogeschool van Amsterdam</td>
                        </tr>
<!--                        todo: tr tussen naam met kleine letters hele naam, boven naam wordt afkorting (SE) -->

                        <tr>
                            <td class="work-year ver-top">
                                <div class="work-full-name">Software Engineering</div>
                                (2017-2021)
                            </td>
                            <td class="work-description work-pb">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliq.
                            </td>
                        </tr>

                        <tr class="">
                            <td class="work-name">AO</td>
                            <td class="work-place ver-top">Regio College Zaandam</td>
                        </tr>
                        <tr class="">
                            <td class="work-year ver-top">
                                <div class="work-full-name">Applicatieontwikkelaar</div>
                                (2014-2017)
                            </td>
                            <td class="work-description work-pb">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliq.
                            </td>
                        </tr>

                        <tr class="">
                            <td class="work-name">VMBO-T</td>
                            <td class="work-place ver-top">Saenredam College, Zaandijk</td>
                        </tr>
                        <tr class="">
                            <td class="work-year ver-top">
                                <div class="work-full-name">VMBO Theoretisch</div>
                                (2009-2014)
                            </td>
                            <td class="work-description">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliq.
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="more-skills">
                <div class="title-header">
                    <h2><span class="plus">+</span></h2>
                    <h2>More skills</h2>
                </div>
                <div class="more-skills-content content-data">
                        <div class="more-skills-icons">
                            <div class="w3"><span class="devicons devicons-git"></span><br/></div>
                            <div class="w3"><span class="devicons devicons-react"></span></div>
                            <div class="w3"><span class="devicons devicons-angular"></span></div>
                            <div class="w3"><span class="devicons devicons-wordpress"></span></div>

                            <div class="w3 icon-text">Git</div>
                            <div class="w3 icon-text">React</div>
                            <div class="w3 icon-text">AngularJS</div>
                            <div class="w3 icon-text">Wordpress</div>
                        </div>
                </div>
            </div>

            <div class="interests">
                <div class="title-header">
                    <h2><span class="plus">+</span></h2>
                    <h2>Interests</h2>
                </div>
                <div class="more-skills-content content-data">
                    <div class="interests-icons">
                        <div class="w3"><span class="fa fa-code"></span></div>
                        <div class="w3"><span class="fa icon-headphones"></span></div>
                        <div class="w3"><span class="fa fa-gamepad"></span><br/></div>
                        <div class="w3"><span class="fa icon-bicycle"></span></div>

                        <div class="w3 icon-text">Programming</div>
                        <div class="w3 icon-text">Music</div>
                        <div class="w3 icon-text">Gaming</div>
                        <div class="w3 icon-text">Cycling</div>

                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
<script src="app.js"></script>
</body>
</html>
