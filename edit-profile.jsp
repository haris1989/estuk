<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn"%>
<!DOCTYPE html>
<!-- Web Designer: @tauseef_sb
Web Designer URL: www.twitter.com/tauseef_sb -->
<html>

<head>
<title>Connect Doctors</title>
<link rel="icon" type="image/png" href="./img/favicon-s.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	rel="stylesheet">

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/style2.css">
<link
	href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
	rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type='text/javascript' src='js/scrollReveal.js'></script>
<script type='text/javascript' src='js/helper.js'></script>
<script type="text/javascript">
	window.onload = function() {
		//window.history.forward();
	};
</script>
</head>

<body>
	<!-- Begin Navbar -->

	<spring:eval var="specialitylist"
		expression="@commonProperties.getProperty('speciality.list')" />
	<c:set var="listOfSpeciality" value="${specialitylist}" />
	<c:set var="listOfSpecialityArray"
		value="${fn:split(listOfSpeciality,',')}" />

	<spring:eval var="schoollist"
		expression="@commonProperties.getProperty('school.list')" />
	<c:set var="listOfSchools" value="${schoollist}" />
	<c:set var="listOfSchoolsArray" value="${fn:split(listOfSchools,',')}" />

	<spring:eval var="completionyearlist"
		expression="@commonProperties.getProperty('completion.year.list')" />
	<c:set var="listOfCompletionYears" value="${completionyearlist}" />
	<c:set var="listOfCompletionYearArray"
		value="${fn:split(listOfCompletionYears,',')}" />

	<spring:eval var="degreelist"
		expression="@commonProperties.getProperty('degree.list')" />
	<c:set var="listOfDegree" value="${degreelist}" />
	<c:set var="listOfDegreeArray" value="${fn:split(listOfDegree,',')}" />

	<spring:eval var="experienceyearlist"
		expression="@commonProperties.getProperty('experience.year.list')" />
	<c:set var="listOfExperienceYears" value="${experienceyearlist}" />
	<c:set var="listOfExperienceYearArray"
		value="${fn:split(listOfExperienceYears,',')}" />

	<!-- Begin Navbar -->

	<%@ include file="header.jsp"%>
	<!-- End Navbar -->
	<div class="container">
		<div class="row">

			<%@ include file="leftpane.jsp"%>
			<div class="col-xs-12 col-sm-6 col-md-7">
				<div class="pinfo">
					<form role="form" method="POST" name="editprofileform"
						id="editprofileform" enctype="multipart/form-data">
						<input type="hidden" name="userEmail" value="${userEmail}">
						<div class="row">
							<div class="col-sm-12">
								<div class="col-xs-10 col-sm-10">
									<div>
										<img src="${profilePicPath}"
											onerror="this.src='./img/user.jpg'"
											style="width: 25%; height: auto; float: left; padding: 10px;">
										<input id="profilePicture" type="file" multiple="" name="profilePicture">
									</div>
									<div>
										<ul style="list-style: none;">
											<li class="name"><input type="text" name="fullName"
												value="${loggedInUser}" placeholder="Simon Ross"></li>
											<li class="profession" id="profess">${profession}</li>
											<li><a href="#"
												onclick="frmsubmit('editprofileform', '${pageContext.servletContext.contextPath}/editprofile');"
												class=" link "> Edit Profile </a></li>
											<table class="info-table">
												<tr>
													<td class="table-col1">Current:</td>
													<td class="table-col2"><input type="text"
														name="currentPosition" value="${currentPosition}"
														placeholder="American Orthodontics Center"></td>
												</tr>
												<tr>
													<td class="table-col1">Previous:</td>
													<td class="table-col2"><input type="text"
														name="previousPosition" value="${previousPosition}"
														placeholder="American Dental Clinic"></td>
												</tr>
												<tr>
													<td class="table-col1"></td>
												</tr>
												<tr>
													<td class="table-col1">Institute:</td>
													<td class="table-col2"><input type="text"
														name="institute" value="${institute}"
														placeholder="American Dental Institute"></td>
												</tr>
												<tr>
													<td class="table-col1">Location:</td>
													<td class="table-col2"><textarea class="table-col2"
															rows="2" name="location"
															placeholder="American State University">${location}</textarea>
													</td>
												</tr>
											</table>
										</ul>
									</div>
								</div>
								<!--  <div class="col-xs-2 col-sm-2">
            <div class="dropdown" style=" float: right; ">
            <button class="btn btn-default fa fa-chevron-down" type="button" data-toggle="dropdown" style=" padding: 0px 3px 0px 3px;"></button>
            <ul class="dropdown-menu pull-right">
            <li><a href="./pub-profile.html">Public</a></li>
            <li><a href="./my-profile.html">Private</a></li>
            <li class="divider"></li>
            <li><a href="#">Make Public</a></li>
            </ul>
            </div>
            </div>    -->
							</div>
						</div>
						<div class="bar">
							<a href="#"
								onclick="frmsubmit('editprofileform', '${pageContext.servletContext.contextPath}/saveprofile');">
								<button class="button" type="submit">Save</button>
							</a> <a href="#"
								onclick="frmsubmit('editprofileform', '${pageContext.servletContext.contextPath}/myprofile');"><button
									class="button" type="reset">Cancel</button></a>
						</div>
					</form>
				</div>
				<div class="pinfo">
					<div class="panel-heading">Education</div>
					<hr>
					<p>
						School/College:<br>${school}</p>
					<p>
						Completion Year:<br>${completionYear}</p>
					<p>
						Degree:<br>${degree}</p>
					<p>
						Field of Study:<br>${field}</p>
					<p>
						Activities & Interests:<br>${educationActivities}</p>
					<p>
						Description:<br>${educationDescription}</p>
					<span style="padding: 10px;">
						<button class="btn btn-default glyphicon glyphicon-chevron-down"
							type="button" data-toggle="collapse" data-target="#education"
							style="float: right; padding: 0px 3px 0px 3px;"></button>
					</span>


					<div class="collapse" id="education">
						<form name="editeducationform" id="editeducationform">
							<input type="hidden" name="userEmail" value="${userEmail}">
							<div class="form-group edit">
								<font color="#154360"><b>${message}</b></font><label for="school">School/College:</label>
								<input type="text" class="form-control" list="school-list"
									name="school" value="${school}">
								<datalist id="school-list">
									<c:forEach var="i" items="${listOfSchoolsArray}">
										<option value="${i}">
									</c:forEach>
								</datalist>
								<br> <label for="year">Completion Year:</label> <input
									type="text" class="form-control" list="year"
									name="completionYear" value="${completionYear}">
								<datalist id="year">
									<c:forEach var="j" items="${listOfCompletionYearArray}">
										<option value="${j}">
									</c:forEach>
								</datalist>
								<br> <label for="degree">Degree:</label> <input type="text"
									class="form-control" list="degree" name="degree"
									value="${degree}">
								<datalist id="degree">
									<c:forEach var="k" items="${listOfDegreeArray}">
										<option value="${k}">
									</c:forEach>
								</datalist>
								<br> <label>Field of Study:</label> <input type="text"
									class="form-control" list="field" name="field" value="${field}">
								<datalist id="field">
									<c:forEach var="m" items="${listOfSpecialityArray}">
										<option value="${m}">
									</c:forEach>
								</datalist>
								<br> <label>Activities & Interests:</label>
								<textarea type="text" class="form-control"
									name="educationActivities">${educationActivities}</textarea>
								<br> <label>Description:</label>
								<textarea type="text" class="form-control"
									name="educationDescription">${educationDescription}</textarea>
								<br> <a href="#"
									onclick="frmsubmit('editeducationform', '${pageContext.servletContext.contextPath}/saveeducation');"><button
										type="submit" class="btn btn-default">Submit</button></a>
							</div>
						</form>
						<div class="bar"></div>
					</div>
				</div>
				<div class="pinfo">
					<div class="panel-heading"">Experience</div>
					<hr>
					<p>
						Institution:<br>${experiencInstitute}</p>
					<p>
						Experience in Years:<br>${experienceYear}</p>
					<p>
						Position:<br>${position}</p>
					<p>
						Projects:<br>${project}</p>
					<p>
						Activities & Interests:<br>${experienceActivities}</p>
					<p>
						Description:<br>${experienceDescription}</p>

					<span style="padding: 10px;">
						<button class="btn btn-default glyphicon glyphicon-chevron-down"
							type="button" data-toggle="collapse" data-target="#experience"
							style="float: right; padding: 0px 3px 0px 3px;"></button>
					</span>

					<div class="collapse" id="experience">

						<form name="editexperienceform" id="editexperienceform">
							<input type="hidden" name="userEmail" value="${userEmail}">
							<div class="form-group edit">

								<font color="#154360"><b>${message}</b></font> <label for="school">Institution:</label>
								<input type="text" class="form-control" list="school"
									name="experiencInstitute" value="${experiencInstitute}">
								<br> <label for="expyear">Experience in Years:</label> <input
									type="text" class="form-control" list="expyear"
									name="experienceYear" value="${experienceYear}">
								<datalist id="expyear">
									<c:forEach var="n" items="${listOfExperienceYearArray}">
										<option value="${n}">
									</c:forEach>
								</datalist>

								<br> <label for="degree">Position:</label> <input
									type="text" class="form-control" list="degree" name="position"
									value="${position}"> <br> <label>Projects:</label>
								<input type="text" class="form-control" list="field"
									name="project" value="${project}"> <br> <label>Activities
									& Interests:</label>
								<textarea type="text" class="form-control"
									name="experienceActivities">${experienceActivities}</textarea>

								<br> <label>Description:</label>
								<textarea type="text" class="form-control"
									name="experienceDescription">${experienceDescription}</textarea>

								<br> <a href="#"
									onclick="frmsubmit('editexperienceform', '${pageContext.servletContext.contextPath}/saveexperience');"><button
										type="submit " class="btn btn-default ">Submit</button></a>
							</div>
						</form>

						<div class="bar "></div>
					</div>
				</div>




				<div class="pinfo ">
					<div class="panel-heading ">Interests</div>
					<form name="interestsform" id="interestsform">
						<hr>
						<p>Fields of Interests: ${fieldsOfInterests}</p>
						<p>
							Description:<br>${interestsDescription}</p>

						<span style="padding: 10px;"> <a href="#"
							onclick="frmsubmit('interestsform', '${pageContext.servletContext.contextPath}/editinterests');"><button
									class="btn btn-default glyphicon glyphicon-chevron-down" type="button"
									data-toggle="collapse"
									style="float: right; padding: 0px 3px 0px 3px;"></button></a>
						</span>
					</form>

					<div class="collapse" id="interests">


						<br>

						<form name="editinterestform" id="editinterestform">
							<div class="form-group edit ">

								<label for="school ">Fields of Interests:</label> <input
									type="text" class="form-control" list="school"
									name="fieldsOfInterests" value="${fieldsOfInterests}">

								<br> <label>Description:</label>
								<textarea type="text" class="form-control"
									name="interestsDescription">${interestsDescription}</textarea>

								<br> <a href="#"
									onclick="frmsubmit('editinterestform', '${pageContext.servletContext.contextPath}/saveinterest');">
									<button type="submit" class="btn btn-default">Submit</button>
								</a>
							</div>
						</form>
            </div>
        <div class="bar" >
        </div>

    </div>
						<div class="pinfo">
							<div class="panel-heading">Expertise</div>
							<hr>
							<p id="expertsec">${profession}</p>
							<br><br>
							<div class="bar"></div>
						</div>

						<div class="pinfo">
							<div class="panel-heading">Speciality</div>
							<hr>
							<form>
								<li><a href=#. data-toggle=collapse
									data-target=#anaesthesia><b>Anaesthesia</b></a> <input
									class="profess pull-right" type="radio" name="optradio"
									value="Anaesthesia"> <br> <select class="collapse"
									id=anaesthesia>
										<option><a href=#.></a>
										</option>
								</select></li>
								<li><a href=#. data-toggle=collapse
									data-target=#clinical-oncology><b>Clinical-oncology</b></a> <input
									class="profess pull-right" type="radio" name="optradio"
									value="Clinical-oncology"> <br> <select
									class="collapse" id=clinical-oncology>
										<option><a href=#.></a>
										</option>
								</select></li>
								<li><a href=#. data-toggle=collapse
									data-target=#clinical-radiology><b>Clinical-radiology</b></a> <input
									class="profess pull-right" type="radio" name="optradio"
									value="Clinical-radiology"> <br> <select
									class="collapse" id=clinical-radiology>
										<option><a href=#.></a>
										</option>
								</select></li>
								<li><a href=#. data-toggle=collapse data-target=#repro><b>Community
											sexual and reproductive health</b></a> <input
									class="profess pull-right" type="radio" name="optradio"
									value="Community sexual and reproductive health"> <br>
									<select class="collapse" id=repro>
										<option><a href=#.></a>
										</option>
								</select></li>
								<li><a href=#. data-toggle=collapse data-target=#emergency><b>Emergency
											medicine</b></a> <input class="profess pull-right" type="radio"
									name="optradio" value="Emergency medicine"> <br> <select
									class="collapse" id=emergency>
										<option><a href=#.></a>
										</option>
								</select></li>
								<li><a href=#. data-toggle=collapse
									data-target=#general-practice><b>General practice (GP)</b></a>
									<input class="profess pull-right" type="radio" name="optradio"
									value="General practice (GP)"> <br> <select
									class="collapse" id=general-practice>
										<option><a href=#.></a>
										</option>
								</select></li>
								<li><a href=#. data-toggle=collapse data-target=#intensive><b>Intensive
											care medicine</b></a> <input class="profess pull-right" type="radio"
									name="optradio" value="Intensive care medicine"> <br>
									<select class="collapse" id=intensive>
										<option><a href=#.></a>
										</option>
								</select></li>
								<li><a href=#. data-toggle=collapse data-target=#medicine><b>Medicine</b></a>
									<input class="profess pull-right" type="radio" name="optradio"
									value="Medicine"> <br> <select class="collapse"
									id="medicine" multiple="" size="5">
										<option value="Acute internal medicine"><a href=#.><small>Acute
													internal medicine</small></a></option>
										<option value="Allergy"><a href=#.><small>Allergy</small></a></option>
										<option value="Cardiology"><a href=#.><small>Cardiology</small></a></option>
										<option value="Clinical neurophysiology"><a href=#.><small>Clinical
													neurophysiology</small></a></option>
										<option value="Clinical pharmacology and therapeutics">
											<a href=#.><small>Clinical pharmacology and
													therapeutics</small></a></option>
										<option value="Dermatology"><a href=#.><small>Dermatology</small></a></option>
										<option value="Endocrinology and diabetes"><a href=#.><small>Endocrinology
													and diabetes</small></a></option>
										<option value="Gastroenterology"><a href=#.><small>Gastroenterology</small></a></option>
										<option value="General internal medicine"><a href=#.><small>General
													internal medicine</small></a></option>
										<option value="Genitourinary medicine"><a href=#.><small>Genitourinary
													medicine</small></a></option>
										<option value="Geriatric medicine"><a href=#.><small>Geriatric
													medicine</small></a></option>
										<option value="Immunology"><a href=#.><small>Immunology</small></a></option>
										<option value="Infectious diseases"><a href=#.><small>Infectious
													diseases</small></a></option>
										<option value="Medical oncology"><a href=#.><small>Medical
													oncology</small></a></option>
										<option value="Medical ophthalmology"><a href=#.><small>Medical
													ophthalmology</small></a></option>
										<option value="Metabolic Medicine"><a href=#.><small>Metabolic
													Medicine</small></a></option>
										<option value="Neurology"><a href=#.><small>Neurology</small></a></option>
										<option value="Nuclear medicine"><a href=#.><small>Nuclear
													medicine</small></a></option>
										<option value="Palliative medicine"><a href=#.><small>Palliative
													medicine</small></a></option>
										<option value="Pharmaceutical medicine"><a href=#.><small>Pharmaceutical
													medicine</small></a></option>
										<option value="Rehabilitation medicine"><a href=#.><small>Rehabilitation
													medicine</small></a></option>
										<option value="Renal medicine"><a href=#.><small>Renal
													medicine</small></a></option>
										<option value="Respiratory medicine"><a href=#.><small>Respiratory
													medicine</small></a></option>
										<option value="Rheumatology"><a href=#.><small>Rheumatology</small></a></option>
										<option value="Sport and exercise medicine"><a
												href=#.><small>Sport and exercise medicine</small></a></option>
										<option value="Stroke medicine"><a href=#.><small>Stroke
													medicine</small></a></option>
										<option value="Tropical medicine"><a href=#.><small>Tropical
													medicine</small></a></option>
								</select></li>

								<div class=collapse id=speciality>

									<li><a href=#. data-toggle=collapse
										data-target=#obstetrics><b>Obstetrics and gynaecology</b></a>
										<input class="profess pull-right" type="radio" name="optradio"
										value="Obstetrics and gynaecology"> <br> <select
										class="collapse" id="obstetrics" multiple="">
											<option><a href=#.></a>
									</select>
										</option></li>
									<li><a href=#. data-toggle=collapse
										data-target=#occupational><b>Occupational medicine</b></a> <input
										class="profess pull-right" type="radio" name="optradio"
										value="Occupational medicine"> <br> <select
										class="collapse" id="occupational" multiple="">
											<option><a href=#.></a>
											</option>
									</select></li>
									<li><a href=#. data-toggle=collapse
										data-target=#ophthalmology><b>Ophthalmology</b></a> <input
										class="profess pull-right" type="radio" name="optradio"
										value="Ophthalmology"> <br> <select
										class="collapse" id="ophthalmology" multiple="">
											<option><a href=#.></a>
											</option>
									</select></li>
									<li><a href=#. data-toggle=collapse
										data-target=#paediatrics><b>Paediatrics</b></a> <input
										class="profess pull-right" type="radio" name="optradio"
										value="Paediatrics"> <br> <select
										class="collapse" id="paediatrics" multiple="">
											<option><a href=#.>Paediatric cardiology</a></option>
											<option><a href=#.>Paediatrics</a></option>
									</select></li>
							</form>
						</div>
						<span style="padding: 10px;">
							<button class="btn btn-default glyphicon glyphicon-chevron-down"
								type="button" data-toggle="collapse" data-target="#speciality"
								style="float: right; padding: 0px 3px 0px 3px;"></button>
						</span>

						<div class="collapse" id="Speciality">

							<br>

						</div>
						<div class="bar">
							<a href="#"
								onclick="frmsubmit('editprofileform', '${pageContext.servletContext.contextPath}/saveprofile');"><button class="button" type="submit">Save</button></a>
						</div>
					</div>


				</div>

				<div class="hidden-xs col-sm-3 col-md-3 ">

					<%@ include file="rightpane.jsp"%>

				</div>
			</div>



		</div>
		<%@ include file="chat-new.jsp"%>



		<!-- Footer -->

		<%@ include file="footer.jsp"%>
		
		<script>
		$("#profilePicture ").click(function() {
			alert("Only 'jpg' and 'png' image formats are supported. Please upload picture upto 100KB in size.");
		});
	</script>

		<script>
		$("#fileupload ").click(function() {
			$("#upload-file ").click();
		});
	</script>
		<script>
		$("#up-file ").click(function() {
			$("#custom-file ").click();
		});
	</script>
	<script type="text/javascript">
	
        $( ".profess" ).on( "click", function() {
  $( "#profess" ).html( $( "input[name=optradio]:checked" ).val() );
});
    </script>
    <script type="text/javascript">
        $( "select" ).change(function () {
    var str = "";
    $( "select[id=medicine] option:selected" ).each(function() {
      str += $( this ).text() + ", ";
    });
    $( "#expertsec" ).text( str );
  })
  .change();
    </script>
</body>
</html>
