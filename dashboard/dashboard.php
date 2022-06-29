<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/sms/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <nav>
        <ul class="studentss">

            <li><a href="#">Student</a> </li>

            <!-- <select name="student" id="cars">
                <option value="student" selected>Student</option>
                <option value="create_student_profile">Create Student Profile</option>
                <option value="update_student_profile">Update Student Profile</option>
                <option value="view_student_profile">View Student Profile</option>
            </select> -->
        </ul>
    </nav>

    <div class="btns">
        <div>
            <span class="btn" id="createProfile"> Create Profile</span>
            <span class="btn" id="viewProfile">  View Profile </span>
        </div>
        <div><span class="btn" id="search"> <input type="text" name="rollNumber" id="" placeholder="  Search by Roll Number"><span> <i class="fa fa-search"></i></span> </span>
        </div>

    </div>



    <!-- update Profile -->

  

    <section id="main">

        <div class="show" >
            <div class="tables">
                <table>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Roll Number</th>
                        <th>Reg. Number</th>
                        <th>Full Name</th>
                        <th>Father's Name</th>
                        <th>Students Mobile Number</th>
                        <th>More Details</th>
                        <th>Edit</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>19/CSE/22</td>
                        <td>19105124010</td>
                        <td>Divya Bharti</td>
                        <td>Mahendra Mehta</td>
                        <td>7696853946</td>
                        <td><i class="fa fa-info-circle"></i> </td>
                        <td><a href="/sms/edit.html"><i class="fa fa-edit"></i> </a> </td>
                    </tr>
                </table>
            </div>
        </div>


    </section>
</body>
<script>
    const createProfileForm = `
    <div class="form">
    <form action="">
        <div><label for="">Roll Number :</label>
        <input type="text" class="" name="rollName" placeholder="Enter Roll Number"></div>
        
        <input type="submit" value="Create Profile" class="submit">
    </form>
</div>`


    const createProfilelink = document.getElementById("createProfile");
    console.log(createProfilelink);
    const main = document.getElementById("main");

    createProfilelink.addEventListener("click", (e) => {
        //students.classList.remove("show-text");
        //students.classList.toggle("students")
        console.log("hello");
        main.innerHTML = "";
        main.innerHTML += createProfileForm;
    })



    const show =`   <div class="show" >
            <div class="tables">
                <table>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Roll Number</th>
                        <th>Reg. Number</th>
                        <th>Full Name</th>
                        <th>Father's Name</th>
                        <th>Students Mobile Number</th>
                        <th>More Details</th>
                        <th>Edit</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>19/CSE/22</td>
                        <td>19105124010</td>
                        <td>Divya Bharti</td>
                        <td>Mahendra Mehta</td>
                        <td>7696853946</td>
                        <td><i class="fa fa-info-circle"></i> </td>
                        <td><a href="/sms/edit.html"><i class="fa fa-edit"></i> </a> </td>
                    </tr>
                </table>
            </div>
        </div>`


    // const view = document.querySelector(".show");
     const viewProfile = document.getElementById("viewProfile");
    // console.log(view);
     viewProfile.addEventListener("click", (e)=>{
         main.innerHTML ="";
         main.innerHTML += show;
    //     console.log(test);
     })




    // const student = document.querySelector(".student");
    // const students = document.querySelector(".students");
    // student.addEventListener("click", function(e) {
    //     //e.preventDefault;

    //     //console.log("Hello");
    //     students.classList.toggle("show-text");
    //     students.classList.toggle("students");
    // })
</script>

</html>