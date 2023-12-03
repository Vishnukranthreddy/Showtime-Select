<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img\sslogo.jpg">
    <link rel="stylesheet" href="./style.css">
    <title>Movies Schedule</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<style>.schedule-section {
  width: 80%;
  margin: 0 auto;
}

.schedule-section > h1 {
  padding: 0 0 20px 0;
  margin: 0 0 40px 0;
  border-bottom: 1px solid #bdbdbd;
  color: #6e5a11;
}

.schedule-dates {
  display: flex;
  justify-content: center;
  margin: 40px 0;
}

.schedule-item {
  padding: 15px;
  background-color: rgb(76, 107, 170);
  margin-right: 10px;
  color: #fff;
  cursor: pointer;
  transition: all 0.5s ease;
}

.schedule-item:hover {
  background-color: #b6b6b6;
  color: #6e5a11;
}

.schedule-item-selected {
  color: #6e5a11;
  background-color: #b6b6b6;
  cursor: auto;
}

.schedule-table table {
  text-align: left;
  border-collapse: collapse;
}

.schedule-table table tr th {
  padding: 10px 0 10px 40px;
  background-color: rgb(76, 107, 170);
  border: 1px solid #b6b6b6;
  color: #fff;
}

.schedule-table table tr th:first-child {
  width: 35%;
  border-right: 1px solid #bdbdbd;
}

.schedule-table table tr td {
  padding: 40px;
  border: 1px solid #bdbdbd;
}

.schedule-table table tr td > h2 {
  margin: 0 0 15px 0px;
}

.schedule-table table tr td > h3 {
  margin: 15px 0px;
}

.schedule-table table tr td > p {
  margin: 0 0 15px 0px;
}

.schedule-table table tr td > i {
  margin: 0 10px;
}

.schedule-table table tr td > .schedule-item {
  width: 50%;
  margin: 0 auto;
  text-align: center;
  font-weight: bold;
}

.hall-type > h3 {
  margin: 15px 0;
}

.hall-type > div {
  display: flex;
  justify-content: left;
}

.hall-type > div .schedule-item {
  cursor: auto;
}
</style>

<header></header>

<body>
    <div class="schedule-section">
        <h1>Schedule</h1>
        <div class="schedule-dates" id="schedule-dates">
            <div class="schedule-item">Nov 10,2023</div>
            <div class="schedule-item schedule-item-selected" onclick="selectDate(this)">Nov 11,2023</div>
            <div class="schedule-item" onclick="selectDate(this)">Nov 12,2023</div>
            <div class="schedule-item" onclick="selectDate(this)">Nov 13,2023</div>
            <div class="schedule-item" onclick="selectDate(this)">Nov 14,2023</div>
        </div>
        <div class="schedule-table">
            <table>
                <tr>
                    <th>SHOW</th>
                    <th>SCHEDULE IN CINEMA</th>
                </tr>
                <tr class="fade-scroll">
                    <td>
                        <h2>Leo</h2>
                        <i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX
                        <h3>SYNOPSIS</h3>
                        <p>Ethan and team take on their most impossible mission yet, eradicating the Syndicate - an International rogue organization
                        </p>
                        <div class="schedule-item"> DETAILS</a>
                        
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Private Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">1:00 PM</div>
                                <div class="schedule-item">06:00 PM</div>
                                <a class="schedule-item" href="./seat.html">Book ticket</a>
                                <div class="schedule-item"> <a href="CS22B1022/index.html">View Theatre</a></div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">1:00 PM</div>
                                <div class="schedule-item">6:00 PM</div>
                                <a class="schedule-item" href="./seat.html">Book ticket</a>
                                <div class="schedule-item"> <a href="cs22/CS22B1022/index.html">View Theatre</a></div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">1:00 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                                <a class="schedule-item" href="./seat.html">Book ticket</a>
                                <div class="schedule-item"> <a href="cs22b/CS22B1022/index.html">View Theatre</a></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="fade-scroll">
                    <td>
                        <h2>Tiger 3</h2>
                        <i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX
                        <h3>SYNOPSIS</h3>
                        <p>Ethan and team take on their most impossible mission yet, eradicating the Syndicate - an International rogue organization
                        </p>
                        <div class="schedule-item"> DETAILS</a>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Private Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                                <a class="schedule-item" href="./seat.html">Book ticket</a>
                                <div class="schedule-item"> <a href="CS22B1022/index.html">View Theatre</a></div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                                <a class="schedule-item" href="./seat.html">Book ticket</a>
                                <div class="schedule-item"> <a href="cs22/CS22B1022/index.html">View Theatre</a></div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                               <a class="schedule-item" href="./seat.html">Book ticket</a>
                               <div class="schedule-item"> <a href="cs22b/CS22B1022/index.html">View Theatre</a></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="fade-scroll">
                    <td>
                        <h2>Japan</h2>
                        <i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX
                        <h3>SYNOPSIS</h3>
                        <p>Ethan and team take on their most impossible mission yet, eradicating the Syndicate - an International rogue organization
                        </p>
                        <div class="schedule-item"> DETAILS</a>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Private Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                                <a class="schedule-item" href="./seat.html">Book ticket</a>
                                <div class="schedule-item"> <a href="CS22B1022/index.html">View Theatre</a></div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                                <a class="schedule-item" href="./seat.html">Book ticket</a>
                                <div class="schedule-item"> <a href="cs22/CS22B1022/index.html">View Theatre</a></div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                                <a class="schedule-item" href="./seat.html">Book ticket</a>
                                <div class="schedule-item"> <a href="cs22b/CS22B1022/index.html">View Theatre</a></div>
                            </div>
                        </div>
                    </td>
                </tr>
               
                
                
            </table>
        </div>


    </div>
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>

    <script>
        function selectDate(selectedDate) {
            // Remove the 'schedule-item-selected' class from all dates
            var allDates = document.querySelectorAll('.schedule-dates .schedule-item');
            allDates.forEach(function (date) {
                date.classList.remove('schedule-item-selected');
            });

            // Add the 'schedule-item-selected' class to the selected date
            selectedDate.classList.add('schedule-item-selected');
        }
    </script>
</body>

</html>