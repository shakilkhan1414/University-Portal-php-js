const content = document.getElementById("main-content");
const xhttp	= new XMLHttpRequest();

function loginProcess(){
    let email=document.getElementById("email").value;
    let password=document.getElementById("password").value;

    const form= document.getElementById("login");

    if(email=="" || password==""){
        document.querySelector(".error").innerHTML="*Email and password required!";
    }
    else{
        xhttp.open('POST', '../controller/loginCheck.php', true);
        let formData = new FormData(form);
        xhttp.send(formData);
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                if(this.responseText=="student"){
                    location.href="../view/student/dashboard.php";
                }
                else if(this.responseText=="failed"){
                    document.querySelector(".error").innerHTML="*Invalid username and password!";
                }
                else{
                    location.href="../view/official/dashboard.php";
                }
            }
        }
    }

    return false;
}

function home(){
    location.href="../official/dashboard.php";
}
function studentHome(){
    location.href="../student/dashboard.php";
}

function homeContent(){
    xhttp.open('POST', '../official/homeContent.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function studentHomeContent(){
    xhttp.open('POST', '../student/homeContent.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function showStudents(){
    xhttp.open('POST', '../official/students.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            $(".sidebar li:nth-child(2)").addClass('active').siblings().removeClass('active');
		}
    }
}

function addStudent(){
    xhttp.open('POST', '../official/addStudent.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function ShowRequests(){
    xhttp.open('POST', '../official/requests.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            $(".sidebar li:nth-child(4)").addClass('active').siblings().removeClass('active');
		}
    }
}

function myRequests(){
    xhttp.open('POST', '../student/myRequests.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            $(".sidebar li:nth-child(2)").addClass('active').siblings().removeClass('active');
		}
    }
}

function account(){
    xhttp.open('POST', '../official/account.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            $(".sidebar li:nth-child(6)").addClass('active').siblings().removeClass('active');
		}
    }
}

function studentAccount(){
    xhttp.open('POST', '../student/account.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            $(".sidebar li:nth-child(6)").addClass('active').siblings().removeClass('active');
		}
    }
}

function showNewRequest(){
    xhttp.open('POST', '../student/addRequest.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            $(".sidebar li:nth-child(3)").addClass('active').siblings().removeClass('active');
		}
    }
}

function logout(){
    xhttp.open('POST', '../../controller/logout.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            location.href="../login.php";
		}
    }
}

function viewStudent(id){
    xhttp.open('POST', '../official/viewStudent.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function viewSingleRequest(id){
    xhttp.open('POST', '../official/singleRequest.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function viewSingleRequestStudent(id){
    xhttp.open('POST', '../student/singleRequest.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function deleteStudent(id){
    xhttp.open('POST', '../official/students.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("detete_id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            showStudents();
		}
    }
}

function deleteRequest(id){
    xhttp.open('POST', '../student/myRequests.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("detete_id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            myRequests();
		}
    }
}

function validateEmail(email){
    let atposition=email.indexOf("@");  
    let dotposition=email.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){   
      return false;  
      }
      else{
          return true;
      }
}
function isNumeric(name){
    if(name.includes("0") || name.includes("1")|| name.includes("2")|| name.includes("3")|| name.includes("4")|| name.includes("5")|| name.includes("6")|| name.includes("7")|| name.includes("8")|| name.includes("9")) {
        return true;
    }
    else{
        return false;
    }
}

function validateName(name){
    if(!isNaN(name) || name.includes("@") || name.includes("#") || name.includes("%") || name.includes("$")){
        return false;
    }
    else{
        return true;
    }
}


function addStudentProcess(){
    const form = document.getElementById("addStudent");

    let name=document.getElementById("name").value;
    let email=document.getElementById("email").value;
    let password=document.getElementById("password").value;
    let gender=document.querySelector('input[name="gender"]:checked').value;
    let dob=document.getElementById("dob").value;
    let department=document.getElementById("department").value;
    let admissionDate=document.getElementById("admissionDate").value;
    let semester=document.getElementById("semester").value;
    let completedCredit=document.getElementById("completedCredit").value;
    let cgpa=document.getElementById("cgpa").value;
    let balance=document.getElementById("balance").value;
    let profileImageName=document.getElementsByName('profileImage')[0].value;
        
    let msg= document.getElementById("msg");

    if(name=="" || email=="" || password=="" || dob=="" || department=="" || admissionDate=="" || semester=="" || completedCredit=="" || cgpa=="" || balance=="" || profileImageName==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(validateName(name)){
            if(validateEmail(email)){
                if(password.length < 5){
                    msg.style.display = "block";
                    msg.className="error";
                    msg.innerHTML="*Password too short!";
                }
                else{
                    if(password.includes("@") || password.includes("#") || password.includes("$") || password.includes("%")){
                        xhttp.open('POST', '../../controller/official/addStudentProcess.php', true);
                        let formData = new FormData();
                        formData.append('name',name);
                        formData.append('email',email);
                        formData.append('password',password);
                        formData.append('gender',gender);
                        formData.append('dob',dob);
                        formData.append('department',department);
                        formData.append('admissionDate',admissionDate);
                        formData.append('semester',semester);
                        formData.append('completedCredit',completedCredit);
                        formData.append('cgpa',cgpa);
                        formData.append('semester',semester);
                        formData.append('balance',balance);
                        formData.append("profileImage", profileImage.files[0]);
                        xhttp.send(formData);
                        xhttp.onreadystatechange = function(){
                            if(this.readyState == 4 && this.status == 200){
                                if(this.responseText=="success"){
                                    msg.style.display = "block";
                                    msg.className="success";
                                    msg.innerHTML="Student Added successfully!";
                                    form.reset();
                                    showStudents();
                                }
                                else{
                                    msg.style.display = "block";
                                    msg.className="error";
                                    msg.innerHTML=this.responseText;
                                }
                            }
                        }
                    }
                    else{
                        msg.style.display = "block";
                        msg.className="error";
                        msg.innerHTML="*Add a @/ #/ $/ % with password!";
                    }
                }
            }
            else{
                msg.style.display = "block";
                msg.className="error";
                msg.innerHTML="*Incorrect email format!";
            }
            
        }
        else{
            msg.style.display = "block";
            msg.className="error";
            msg.innerHTML="*Invalid name!";
        }
    }
    return false;
}

function editStudent(){
    const form = document.getElementById("editStudent");

    let id=document.getElementById("id").value;
    let name=document.getElementById("name").value;
    let email=document.getElementById("email").value;
    let gender=document.querySelector('input[name="gender"]:checked').value;
    let dob=document.getElementById("dob").value;
    let department=document.getElementById("department").value;
    let admissionDate=document.getElementById("admissionDate").value;
    let semester=document.getElementById("semester").value;
    let completedCredit=document.getElementById("completedCredit").value;
    let cgpa=document.getElementById("cgpa").value;
    let balance=document.getElementById("balance").value;
        
    let msg= document.getElementById("msg");

    if(name=="" || email=="" || dob=="" || department=="" || admissionDate=="" || semester=="" || completedCredit=="" || cgpa=="" || balance==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(validateName(name)){
            if(validateEmail(email)){
                xhttp.open('POST', '../../controller/official/editStudentProcess.php', true);
                let formData = new FormData();
                formData.append('id',id);
                formData.append('name',name);
                formData.append('email',email);
                formData.append('gender',gender);
                formData.append('dob',dob);
                formData.append('department',department);
                formData.append('admissionDate',admissionDate);
                formData.append('semester',semester);
                formData.append('completedCredit',completedCredit);
                formData.append('cgpa',cgpa);
                formData.append('semester',semester);
                formData.append('balance',balance);
                xhttp.send(formData);
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        if(this.responseText=="success"){
                            msg.style.display = "block";
                            msg.className="success";
                            msg.innerHTML="Updated successfully!";
                            viewStudent(id);
                        }
                        else{
                            msg.style.display = "block";
                            msg.className="error";
                            msg.innerHTML=this.responseText;
                        }
                    }
                }
            }
            else{
                msg.style.display = "block";
                msg.className="error";
                msg.innerHTML="*Incorrect email format!";
            }
            
        }
        else{
            msg.style.display = "block";
            msg.className="error";
            msg.innerHTML="*Invalid name!";
        }
    }
    return false;
}


function addRequestProcess(){
    const form = document.getElementById("addRequest");

    let bname=document.getElementById("bname").value;
    let ename=document.getElementById("ename").value;
    let bfathersName=document.getElementById("bfathersName").value;
    let efathersName=document.getElementById("efathersName").value;
    let address=document.getElementById("address").value;
    let phone=document.getElementById("phone").value;
    let roll=document.getElementById("roll").value;
    let registration=document.getElementById("registration").value;
    let certificate_type=document.getElementById("certificate_type").value;
    let department=document.getElementById("department").value;
    let sesson=document.getElementById("sesson").value;
    let examYear=document.getElementById("examYear").value;
    let cgpa=document.getElementById("cgpa").value;
    let resultDate=document.getElementById("resultDate").value;
    let bankDetails=document.getElementById("bankDetails").value;

    let msg= document.getElementById("msg");

    if(bname=="" || ename=="" || bfathersName=="" || efathersName=="" || address=="" || phone=="" || roll=="" || registration=="" || certificate_type=="" || department=="" || sesson=="" || examYear=="" || cgpa=="" || resultDate=="" || bankDetails==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        xhttp.open('POST', '../../controller/student/addRequestProcess.php', true);
        let formData = new FormData();
        formData.append('bname',bname);
        formData.append('ename',ename);
        formData.append('bfathersName',bfathersName);
        formData.append('efathersName',efathersName);
        formData.append('address',address);
        formData.append('phone',phone);
        formData.append('roll',roll);
        formData.append('registration',registration);
        formData.append('certificate_type',certificate_type);
        formData.append('department',department);
        formData.append('sesson',sesson);
        formData.append('examYear',examYear);
        formData.append('cgpa',cgpa);
        formData.append('resultDate',resultDate);
        formData.append('bankDetails',bankDetails);
        xhttp.send(formData);
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                if(this.responseText=="success"){
                    msg.style.display = "block";
                    msg.className="success";
                    msg.innerHTML="Request Added successfully!";
                    form.reset();
                    myRequests();
                }
                else{
                    msg.style.display = "block";
                    msg.className="error";
                    msg.innerHTML=this.responseText;
                }
            }
        }
    }
    return false;
}



function showEditAccount(){
    xhttp.open('POST', '../official/editAccount.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function showChangePass(){
    xhttp.open('POST', '../official/changePassword.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function changePass(){

    const form= document.getElementById("changePass");

    let cpass=document.getElementById("cpass").value;
    let npass=document.getElementById("npass").value;
    let rpass=document.getElementById("rpass").value;

    let msg= document.getElementById("msg");

    if(cpass=="" || npass=="" || rpass==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(npass.length < 5){
            msg.style.display = "block";
            msg.className="error";
            msg.innerHTML="*Password too short!";
        }
        else{
            if(npass.includes("@") || npass.includes("#") || npass.includes("$") || npass.includes("%")){
                if(npass==rpass){   
                    xhttp.open('POST', '../../controller/official/changePasswordProcess.php', true);
                    let formData = new FormData(form);
                    xhttp.send(formData);
                    xhttp.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200){
                            if(this.responseText=="success"){
                                msg.style.display = "block";
                                msg.className="success";
                                msg.innerHTML="Password changed successfully!";
                                form.reset();
                            }
                            else{
                                msg.style.display = "block";
                                msg.className="error";
                                msg.innerHTML=this.responseText;
                            }
                        }
                    }
                }
                else{
                    msg.style.display = "block";
                    msg.className="error";
                    msg.innerHTML="*Password must match!";
                }
            }
            else{
                msg.style.display = "block";
                msg.className="error";
                msg.innerHTML="*Add a @/ #/ $/ % with new password!";
            }
        }
    }
    return false;
}


function editAccount(){

    const form= document.getElementById("editAccount");

    let name=document.getElementById("name").value;
    let email=document.getElementById("email").value;
    let dob=document.getElementById("date").value;

    let msg= document.getElementById("msg");

    if(name=="" || dob==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(validateName(name)  && !isNumeric(name)){
            xhttp.open('POST', '../../controller/official/editAccountProcess.php', true);
            let formData = new FormData(form);
            formData.append('email',email);
            xhttp.send(formData);
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    if(this.responseText=="success"){
                        msg.style.display = "block";
                        msg.className="success";
                        msg.innerHTML="Updated successfully!";
                    }
                    else{
                        msg.style.display = "block";
                        msg.className="error";
                        msg.innerHTML=this.responseText;
                    }
                }
            }
        }
        else{
            msg.style.display = "block";
            msg.className="error";
            msg.innerHTML="*Invalid name!";
        }
    }

    return false;
}

function search(){
    let value=document.getElementById("search").value;

    xhttp.open('POST', '../official/search.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("search="+value);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            $(".sidebar li:nth-child(2)").addClass('active').siblings().removeClass('active');
		}
    }
}

function approveRequest(id){
    xhttp.open('POST', '../../controller/official/approveRequest.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
			ShowRequests();
		}
    }
}

function declineRequest(id){
    xhttp.open('POST', '../../controller/official/declineRequest.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			ShowRequests();
		}
    }
}

function declineRequestWithComment(){
    let id=document.getElementById('id').value;
    let comment=document.getElementById('comment').value;
    xhttp.open('POST', '../../controller/official/declineRequestWithComment.php', true);
    let formData = new FormData();
    formData.append('id',id);
    formData.append('comment',comment);
    xhttp.send(formData);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
            $("#declineModal1").modal('hide');
			ShowRequests();
		}
    }
    return false;
}


function showEditStudent(id){
    xhttp.open('POST', '../official/editStudent.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function print() {
    const printContent=document.getElementById('print-content');
    var opt = {
        margin:       0,
        filename:     'clearence-form.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
      };
      
      html2pdf().set(opt).from(printContent).save();
}


$(".sidebar li").click(function(){
    $(this).addClass('active').siblings().removeClass('active');
});


// ---------Registration----------



function myRegistrations(){
    xhttp.open('POST', '../student/myRegistrations.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            $(".sidebar li:nth-child(4)").addClass('active').siblings().removeClass('active');
		}
    }
}

function showNewRegistration(){
    xhttp.open('POST', '../student/addRegistration.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            $(".sidebar li:nth-child(5)").addClass('active').siblings().removeClass('active');
            semesterWiseSubjects(1);
		}
    }
}

function viewSingleRegistrationStudent(id){
    xhttp.open('POST', '../student/singleRegistration.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function viewSingleRegistration(id){
    xhttp.open('POST', '../official/singleRegistration.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function deleteRegistration(id){
    xhttp.open('POST', '../student/myRegistrations.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("detete_id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            myRegistrations();
		}
    }
}

function printReg() {
    const printContent=document.getElementById('print-content2');
    var opt = {
        margin:       0,
        filename:     'registration-form.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
      };
      
      html2pdf().set(opt).from(printContent).save();
}

function addRegistrationProcess(){
    let name=document.getElementById("name").value;
    let studentid=document.getElementById("studentid").value;
    let fname=document.getElementById("fname").value;
    let mname=document.getElementById("mname").value;
    let program=document.getElementById("program").value;
    let department=document.getElementById("department").value;
    let registration=document.getElementById("registration").value;
    let year=document.getElementById("year").value;
    let semester=document.getElementById("semester").value;
    let sesson=document.getElementById("sesson").value;
    let presentAddress=document.getElementById("presentAddress").value;
    let permanentAddress=document.getElementById("permanentAddress").value;
    let nationalID=document.getElementById("nationalID").value;
    let nationality=document.getElementById("nationality").value;
    let email=document.getElementById("email").value;
    let bloodGroup=document.getElementById("bloodGroup").value;
    let residential=document.querySelector('input[name="residential"]:checked').value;
    let hallName=document.getElementById("hallName").value;
    

    let msg= document.getElementById("msg");

    if(name=="" || studentid=="" || fname=="" || mname=="" || program=="" || department=="" || registration=="" || year=="" || semester=="" || sesson=="" || presentAddress=="" || permanentAddress=="" || nationality=="" || email=="" || bloodGroup=="" || residential==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        xhttp.open('POST', '../../controller/student/addRegistrationProcess.php', true);
        let formData = new FormData();
        formData.append('name',name);
        formData.append('studentid',studentid);
        formData.append('fname',fname);
        formData.append('mname',mname);
        formData.append('program',program);
        formData.append('department',department);
        formData.append('registration',registration);
        formData.append('year',year);
        formData.append('semester',semester);
        formData.append('sesson',sesson);
        formData.append('presentAddress',presentAddress);
        formData.append('permanentAddress',permanentAddress);
        formData.append('nationalID',nationalID);
        formData.append('nationality',nationality);
        formData.append('email',email);
        formData.append('bloodGroup',bloodGroup);
        formData.append('residential',residential);
        formData.append('hallName',hallName);
        xhttp.send(formData);
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                if(this.responseText=="success"){
                    msg.style.display = "block";
                    msg.className="success";
                    msg.innerHTML="Request Added successfully!";
                    myRegistrations();
                }
                else{
                    msg.style.display = "block";
                    msg.className="error";
                    msg.innerHTML=this.responseText;
                }
            }
        }
    }

    

    return false;
}

function changeSemester() {
    let semester=document.getElementById('semesterSubject').value;
    semesterWiseSubjects(semester);
}

function addSubject(id) {
    xhttp.open('POST', '../../controller/student/addSubject.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            showRegisteredSubjects();
		}
    }
}

function removeSubject(id) {
    xhttp.open('POST', '../../controller/student/removeSubject.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            showRegisteredSubjects();
		}
    }
}

function showRegisteredSubjects() {
    xhttp.open('POST', '../../controller/student/showRegisteredSubjects.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            document.getElementById('registeredSubjects').innerHTML=this.responseText;
		}
    }
}

function semesterWiseSubjects(semester) {
    xhttp.open('POST', '../../controller/student/semesterWiseSubjects.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("semester="+semester);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            document.getElementById('semester-wise-subjects').innerHTML=this.responseText;
		}
    }
}

function ShowRegistrations(){
    xhttp.open('POST', '../official/registrations.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            $(".sidebar li:nth-child(5)").addClass('active').siblings().removeClass('active');
		}
    }
}

function approveRegistration(id){
    xhttp.open('POST', '../../controller/official/approveRegistration.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
			ShowRegistrations();
		}
    }
}

function declineRegistration(id){
    xhttp.open('POST', '../../controller/official/declineRegistration.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			ShowRegistrations();
		}
    }
}

