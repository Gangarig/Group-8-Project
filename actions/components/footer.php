<?php
$result = mysqli_query($link, "SELECT `id`, `name` FROM `courses`");
$courses = '';
while ($row = mysqli_fetch_array($result)) {
    $courses .= '<li><a href="#">' . $row["name"] . '</a></li>';
}

$footer = '
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="second">
                    <h4>Courses</h4>
                    <ul>
                        ' . $courses . '
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="second">
                    <h4>Navigate</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Registration course</a></li>
                        <li><a href="#">Reservations</a></li>
                        <li><a href="#">Students</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="third">
                    <h4>Contact</h4>
                    <ul>
                        <li>Rose Warner</li>
                        <li></li>

                        <li>
                            <i class="bi bi-envelope" style="padding-right: 10px; color: #f5cb5c">
                            </i>
                            firstaidcourses@mail.com
                        </li>
                        <li>
                            <i class="bi bi-telephone-fill" style="padding-right: 10px; color: #f5cb5c">
                            </i>
                            +43 1 645 645
                        </li>

                        <li>
                            <i class="bi bi-geo-alt-fill" style="padding-right: 10px; color: #f5cb5c">
                            </i>
                            Vienna, AT
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="line"></div>
                <div class="second2">
                    <a href="https://intagram.com" target="_blank">
                        <i class="bi bi-instagram" style="font-size: 40px; color: #333533"></i></a>
                    <a href="https://youtube.com/" target="_blank">
                        <i class="bi bi-youtube" style="font-size: 40px; color: #333533"></i></a>
                    <a href="https://www.linkedin.com" target="_blank">
                        <i class="bi bi-linkedin" style="font-size: 40px; color: #333533"></i></a>
                    <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook" style="font-size: 40px; color: #333533"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
';