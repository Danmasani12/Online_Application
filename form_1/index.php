<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="applcation-form-assessment">
        <div class="mask-group">
            <div class="rectangle-2"></div>
            <div class="group-1">
                <div class="ellipse-9"></div>
                <div class="ellipse-10"></div>
            </div>
        </div>
        <div class="header">
            <div class="frame-6">
                <img class="logo" src="logo.png" />
                <svg class="mdi-email-outline" width="25" height="24" viewBox="0 0 25 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22.1151 6C22.1151 4.9 21.2151 4 20.1151 4H4.11505C3.01505 4 2.11505 4.9 2.11505 6V18C2.11505 19.1 3.01505 20 4.11505 20H20.1151C21.2151 20 22.1151 19.1 22.1151 18V6ZM20.1151 6L12.1151 11L4.11505 6H20.1151ZM20.1151 18H4.11505V8L12.1151 13L20.1151 8V18Z"
                        fill="#CF1973" />
                </svg>

                <div class="support-adecom-edu-ng">support@adecom.edu.ng</div>
                <div class="enquiries-adecom-edu-ng">enquiries@adecom.edu.ng</div>
                <svg class="carbon-phone" width="25" height="24" viewBox="0 0 25 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.615 21.75H19.4875C4.74999 20.9025 2.65749 8.4675 2.36499 4.6725C2.34142 4.37744 2.37631 4.08062 2.46765 3.79906C2.55899 3.5175 2.70499 3.25673 2.89728 3.03169C3.08957 2.80665 3.32438 2.62177 3.58825 2.48763C3.85212 2.35349 4.13986 2.27274 4.43499 2.25H8.56749C8.86791 2.24971 9.1615 2.33963 9.41022 2.50812C9.65894 2.67661 9.85134 2.9159 9.96249 3.195L11.1025 6C11.2123 6.27266 11.2395 6.57156 11.1808 6.85957C11.1222 7.14758 10.9802 7.412 10.7725 7.62L9.17499 9.2325C9.42453 10.6506 10.1036 11.9578 11.1204 12.9772C12.1372 13.9967 13.4426 14.6792 14.86 14.9325L16.4875 13.32C16.6986 13.1146 16.9655 12.9759 17.255 12.9213C17.5444 12.8666 17.8435 12.8983 18.115 13.0125L20.9425 14.145C21.2174 14.2597 21.4519 14.4536 21.6162 14.702C21.7805 14.9504 21.8671 15.2422 21.865 15.54V19.5C21.865 20.0967 21.6279 20.669 21.206 21.091C20.784 21.5129 20.2117 21.75 19.615 21.75ZM4.61499 3.75C4.41608 3.75 4.22532 3.82902 4.08466 3.96967C3.94401 4.11032 3.86499 4.30109 3.86499 4.5V4.56C4.20999 9 6.42249 19.5 19.57 20.25C19.6685 20.2561 19.7673 20.2427 19.8606 20.2105C19.954 20.1783 20.04 20.1281 20.1139 20.0626C20.1877 19.9971 20.2479 19.9176 20.291 19.8288C20.3341 19.74 20.3593 19.6436 20.365 19.545V15.54L17.5375 14.4075L15.385 16.545L15.025 16.5C8.49999 15.6825 7.61499 9.1575 7.61499 9.09L7.56999 8.73L9.69999 6.5775L8.57499 3.75H4.61499Z"
                        fill="#CF1973" />
                </svg>

                <div class="_234-800-000-1000">+234 800 000 1000</div>
                <div class="_234-700-000-0000">+234 700 000 0000</div>
            </div>
        </div>
        <div class="page-name">
            <div class="online-application-for-national-diploma-post-utme-full-time">
                Online Application for National Diploma Post UTME Full-time
            </div>
        </div>
        <form method="post" action="indexhandler.php" class="form">
            <div class="frame-53">
                <div class="form-contents">
                    <div class="course-details-section">
                        <div class="course-detail-info">
                            <div class="course-details">Course details</div>
                            <div class="rectangle-1"></div>
                        </div>
                        <div class="frame-38">
                            <div class="jamb-no">
                                <div class="jamb-number">Jamb Number</div>
                                <div class="frame">
                                    <input type="text" id="jamb-number" name="jambnumber"
                                        placeholder="Enter Jamb Number" required>
                                </div>
                            </div>
                            <div class="jamb-year">
                                <div class="jamb-year2">Jamb Year</div>
                                <select id="jamb-year" name="jambyear" required>
                                    <option value="" disabled selected>Select Jamb Year</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <!-- Add more years as needed -->
                                </select>
                            </div>


                            <div class="course-of-study">
                                <div class="proposed-course-of-study">
                                    Proposed Course of Study
                                </div>
                                <div class="frame">
                                    <select id="course" name="course" required>
                                        <option value="" disabled selected>Select Course</option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Electrical Engineering">Electrical Engineering</option>
                                        <option value="Business Administration">Business Administration</option>
                                        <!-- Add more courses as needed -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="personal-details-section">
                        <div class="personal-details">
                            <div class="personal-details2">Personal details</div>
                            <div class="rectangle-1"></div>
                        </div>
                        <div class="frame-45">
                            <div class="row-1">
                                <div class="surname">
                                    <div class="surname2">Surname</div>

                                    <input type="text" id="surname" name="surname" placeholder="Enter Surname" required>

                                    
                                </div>
                                <div class="first-name">
                                    <div class="first-name2">First Name</div>
                                    <input type="text" id="first-name" name="firstname" placeholder="Enter First name"
                                        required>
                                </div>
                                <div class="middle-name">
                                    <div class="middle-name2">Middle Name</div>
                                    <input type="text" id="middle-name" name="middlename"
                                        placeholder="Enter Middle name" required>
                                </div>
                            </div>
                            <div class="row-2">
                                <div class="email-address">
                                    <div class="email-address2">Email Address</div>
                                    <input type="text" id="email" name="email" placeholder="Enter Email" required>
                                </div>
                                <div class="gender">
                                    <div class="gender2">Gender</div>
                                    <select id="gender" name="gender" required>
                                        <option value="" disabled selected>Select gender</option>
                                        <option value="2023">Male</option>
                                        <option value="2022">Female</option>
                                    </select>
                                </div>

                                <div class="phone">
                                    <div class="phone-number">Phone Number</div>
                                    <input type="text" id="phone-number" name="phonenumber" placeholder="Phone Number"
                                        required>
                                </div>
                            </div>
                            <div class="row-3">
                                <div class="nationality">
                                    <div class="nationality2">Nationality</div>
                                    <select name="country">
                                        <option value="" disabled selected>Select Country</option>
                                        <option value="nigeria">Nigeria</option>
                                        <option value="usa">USA</option>
                                        <option value="uae">UAE</option>
                                        <option value="londin">LONDON</option>
                                        <option value="niger">NIGER</option>
                                        <!-- Add more years as needed -->
                                    </select>
                                </div>
                                <div class="state">
                                    <div class="state2">State</div>
                                    <select name="state">
                                        <option value="" disabled selected>Select State</option>
                                        <option value="kaduna">Kaduna</option>
                                        <option value="kano">Kano</option>
                                        <option value="lagos">Lagos</option>
                                        <option value="abia">Abia</option>
                                        <option value="niger">NIGER</option>
                                        <!-- Add more years as needed -->
                                    </select>
                                </div>

                                <div class="home-status">
                                    <div class="home-address">
                                        <div class="permanent-home-address">
                                            Permanent Home Address
                                        </div>
                                        <input type="text" id="address" name="address" placeholder="Enter Address"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row-5">
                                <div class="sponsor-name">
                                    <div class="full-name-of-sponsor">Full Name of Sponsor</div>
                                    <input type="text" id="sponsor-name" name="sponsorname"
                                        placeholder="Enter Full Name" required>
                                </div>
                                <div class="email-of-sponsor">
                                    <div class="email-address-of-sponsor">
                                        Email Address of Sponsor
                                    </div>
                                    <input type="text" id="email-of-sponsor" name="emailofsponsor"
                                        placeholder="Enter Email Address" required>
                                </div>
                                <div class="relation-with-sponsor">
                                    <div class="relationship">Relationship</div>
                                    <input type="text" id="relation-with-sponsor" name="relationwithsponsor"
                                        placeholder="Enter Relationship" required>
                                </div>
                            </div>
                            <div class="row-4">
                                <div class="religion">
                                    <div class="religion2">Religion</div>
                                    <input type="text" id="religion" name="religion" placeholder="Enter Religion"
                                        required>
                                </div>
                                <div class="marital-status">
                                    <div class="frame-37">
                                        <div class="marital-status2">Marital Status</div>
                                        <input type="text" id="marital-status" name="maritalstatus"
                                            placeholder="Enter Status" required>
                                    </div>
                                </div>
                                <div class="dob">
                                    <div class="date-of-birth">Date of Birth</div>
                                    <div class="frame-30">
                                        <div class="frame-162">

                                            <select name="days" id="days">
                                                <option value="day">Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                            <select name="month" id="month">
                                                <option value="month">Month</option>
                                                <option value="january">January</option>
                                                <option value="january">Febuary</option>
                                                <option value="january">Match</option>
                                                <option value="may">May</option>
                                                <option value="june">June</option>
                                                <option value="july">july</option>
                                                <option value="august">August</option>
                                            </select>
                                            <select name="year" id="year">
                                                <option value="year">Year</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="exam-details-section">
                        <div class="exams-taken">
                            <div class="examinations-taken">Examinations Taken</div>
                            <div class="rectangle-1"></div>
                        </div>
                        <div class="exam-information-row">
                            <div class="exam-type">
                                <div class="examination-type">Examination Type</div>
                                <div class="frame-">

                                    <select name="examtype">
                                        <option value="" disabled selected>Select Exam</option>
                                        <option value="waec">Waec</option>
                                        <option value="neco">Neco</option>
                                        <option value="nabteb">Nabteb</option>
                                        <option value="nbais">Nbais</option>
                                        <!-- Add more years as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="exam-year">
                                <div class="exam-year2">Exam Year</div>
                                <div class="frame-">

                                    <select name="examyear" id="year">
                                        <option value="year">Select Year</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                    </select>

                                </div>

                            </div>
                            <div class="exam-no">
                                <div class="exam-no2">Exam No.</div>
                                <input type="text" id="exam" name="examno"
                                    placeholder="Enter Exam" required>
                            </div>

                        </div>

                    </div>
                    <div class="first-sitting-info">
                        <div class="exams-taken">
                            <div class="examinations-taken">First Sitting</div>
                            <div class="rectangle-1"></div>
                        </div>
                        <div class="result-info">
                            <div class="subject">
                                <div class="subject2">Subject</div>
                                <input type="text" id="subject" name="subject" placeholder="Enter Subject" required>
                            </div>
                            <div class="grade">
                                <div class="grade2">Grade</div>
                                <input type="text" id="grade" name="grade" placeholder="Exam Grade" required>
                            </div>
                            <div class="add-subject" onclick="addSubject()">
                                <div class="gala-add">
                                    <svg class="gala-add-0" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 17.75C13.8325 17.75 17.75 13.8325 17.75 9C17.75 4.16751 13.8325 0.25 9 0.25C4.16751 0.25 0.25 4.16751 0.25 9C0.25 13.8325 4.16751 17.75 9 17.75Z"
                                            stroke="#CF1973" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M5.25 9H12.75" stroke="#CF1973" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9 5.25V12.75" stroke="#CF1973" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="add-subject2">Add Subject</div>
                            </div>
                        </div>
                        <div id="subjects-list"></div>
                    </div>
                    
                    <div class="submit-button">
                        <input type="submit" id="subject" name="submit" value="Submit Application">
                    </div>
                    <br><br><br>
                        </div>
                    </form>

    </div>

    </div>
    </div>
    <div class="copyright">
        <svg class="ph-copyright-light" width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10 2.03125C8.42393 2.03125 6.88326 2.49861 5.5728 3.37423C4.26235 4.24984 3.24097 5.49439 2.63784 6.95049C2.0347 8.40659 1.87689 10.0088 2.18437 11.5546C2.49185 13.1004 3.2508 14.5203 4.36525 15.6348C5.4797 16.7492 6.89959 17.5082 8.44538 17.8156C9.99116 18.1231 11.5934 17.9653 13.0495 17.3622C14.5056 16.759 15.7502 15.7377 16.6258 14.4272C17.5014 13.1167 17.9688 11.5761 17.9688 10C17.9663 7.88732 17.1259 5.86188 15.632 4.36798C14.1381 2.87409 12.1127 2.03373 10 2.03125ZM10 17.0312C8.60935 17.0312 7.24993 16.6189 6.09365 15.8463C4.93737 15.0737 4.03615 13.9755 3.50398 12.6907C2.9718 11.406 2.83255 9.9922 3.10386 8.62827C3.37516 7.26434 4.04482 6.01149 5.02816 5.02816C6.0115 4.04482 7.26435 3.37516 8.62827 3.10385C9.9922 2.83255 11.406 2.97179 12.6907 3.50397C13.9755 4.03615 15.0737 4.93736 15.8463 6.09365C16.6189 7.24993 17.0313 8.60935 17.0313 10C17.0292 11.8642 16.2877 13.6514 14.9696 14.9696C13.6514 16.2877 11.8642 17.0292 10 17.0312ZM7.34375 10C7.34375 10.5575 7.51917 11.1009 7.84514 11.5531C8.17112 12.0054 8.63113 12.3436 9.16002 12.5199C9.68891 12.6962 10.2599 12.7017 10.792 12.5354C11.3242 12.3692 11.7905 12.0398 12.125 11.5938C12.1997 11.4943 12.3108 11.4286 12.434 11.4111C12.5571 11.3936 12.6822 11.4257 12.7816 11.5004C12.8811 11.5751 12.9468 11.6862 12.9643 11.8094C12.9818 11.9325 12.9497 12.0576 12.875 12.157C12.4223 12.7603 11.7914 13.2058 11.0714 13.4305C10.3515 13.6552 9.57913 13.6478 8.86368 13.4092C8.14824 13.1706 7.52598 12.713 7.08505 12.1011C6.64411 11.4893 6.40684 10.7542 6.40684 10C6.40684 9.24582 6.64411 8.51075 7.08505 7.8989C7.52598 7.28704 8.14824 6.82941 8.86368 6.59082C9.57913 6.35223 10.3515 6.34477 11.0714 6.5695C11.7914 6.79422 12.4223 7.23975 12.875 7.84297C12.9497 7.94242 12.9818 8.06748 12.9643 8.19062C12.9468 8.31377 12.8811 8.42491 12.7816 8.49961C12.6822 8.57431 12.5571 8.60643 12.434 8.58892C12.3108 8.57142 12.1997 8.50571 12.125 8.40625C11.7905 7.96025 11.3242 7.6308 10.792 7.46457C10.2599 7.29834 9.68891 7.30376 9.16002 7.48006C8.63113 7.65636 8.17112 7.9946 7.84514 8.44686C7.51917 8.89913 7.34375 9.4425 7.34375 10Z"
                fill="black" />
        </svg>

        <div class="_2023-all-rights-reserved">2023. All rights reserved</div>
        <div class="line-1"></div>
        <div class="developed-by-tec-hi-t">Developed by TECHiT</div>
    </div>
    </div>
    </button>
    </div>
    <script>
        function addSubject() {
            const subjectInput = document.getElementById('subject');
            const gradeInput = document.getElementById('grade');
            const subjectsList = document.getElementById('subjects-list');

            const subjectValue = subjectInput.value;
            const gradeValue = gradeInput.value;

            if (subjectValue && gradeValue) {
                const subjectEntry = document.createElement('div');
                subjectEntry.classList.add('subject-entry');
                subjectEntry.innerHTML = `
                <div class="subject-entry-title">${subjectValue} | ${gradeValue}</div><br>
                
            `;

                subjectsList.appendChild(subjectEntry);

                subjectInput.value = '';
                gradeInput.value = '';
            }
        }
    </script>
</body>

</html>