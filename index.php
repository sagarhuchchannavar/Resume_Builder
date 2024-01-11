<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container text-light">
    <h1 class="text-center my-5 fw-bold">Resume Form</h1>
    <div class="form-container">
    <form action="submit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" value="HGsZOXpfNC">
            <div class="border border-dark p-3 mb-3">    
                <h2>Profile Image:</h2>
                <div class="mb-3">
                    <label class="form-label">Select a square image 1:1 (Recommended):</label>
                    <input class="form-control" name="profile_image" type="file" required>
                </div>
            </div><br><br>
            <div class="border border-dark p-3 mb-3">    
                <h2>Contact:</h2>
                <div class="">
                    <div>
                        <label class="form-label">First Name:</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div><br>
                    <div>
                        <label class="form-label">Last Name:</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div><br>
                </div>
                <div class="mb-3">
                    <label class="form-label">Profession:</label>
                    <input type="text" class="form-control" name="profession" required>
                </div><br>
                <div class="mb-3">
                    <label class="form-label">Email address:</label>
                    <input type="email" class="form-control" name="email" required>
                </div><br>
                <div class="mb-3">
                    <label class="form-label">Phone number:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="without country code" pattern="[0-9]{10}" required>
                </div><br><br>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Skills (Max:5):</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Skillset Name:</label>
                    <input type="text" class="form-control" name="skill1" required>
                    <select class="form-select mt-2" name="skill_level1" required>
                        <option value="">Select stars based upon your skill level</option>
                        <option value="1">1 - Novice</option>
                        <option value="2">2 - Advanced Beginner</option>
                        <option value="3">3 - Competent</option>
                        <option value="4">4 - Proficient</option>
                        <option value="5">5 - Expert</option>
                    </select><br>
                </div>
                <div id="addSkill"></div>
                <div class="mb-3">
                    <button type="button" id="skill_hide" class="btn btn-primary form-control" onclick="addSkill()">+</button>
                </div>
            </div><br><br>
            <div class="border border-dark p-3 mb-3">    
                <h2>Hobbies (Max:4):</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hobby:</label>
                    <input type="text" name="hobby1" class="form-control" required>
                </div>
                <div id="addHobby"></div>
                <div class="mb-3">
                    <button type="button" id="hobby_hide" class="btn btn-primary form-control" onclick="addHobby()">+</button>
                </div>
            </div><br><br>
            <div class="border border-dark p-3 mb-3">    
                <h2>About Me:</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="about_me" style="height: 100px"  required></textarea>
                </div>
            </div><br><br>
            <div class="border border-dark p-3 mb-3">    
                <h2>Education (Max:3):</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">School/College/University:</label>
                    <input type="text" name="institute1" class="form-control">
                </div><br>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Degree Name:</label>
                    <input type="text" name="degree1" class="form-control">
                </div><br>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <label for="exampleInputEmail1" class="form-label">From:</label>
                        <input type="text" name="from1" class="form-control">&nbsp;&nbsp;&nbsp;
                    </div>
                    <div>
                        <label for="exampleInputEmail1" class="form-label">To:</label>
                        <input type="text" name="to1" class="form-control">
                    </div>
                </div><br>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Grade/Score/CGPA:</label>
                    <input type="text" name="grade1" class="form-control">
                </div><br><br>
                <div id="addEducation"></div>
                <div class="mb-3">
                    <button type="button" id="education_hide" class="btn btn-primary form-control" onclick="addEducation()">+</button>
                </div>
            </div><br><br>
            <div class="border border-dark p-3 mb-3">    
                <h2>Experience (Max:3):</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title:</label>
                    <input type="text" name="title1" class="form-control">
                </div><br>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description:</label>
                    <input type="text" name="description1" class="form-control">
                </div>
                <div id="addExperience"></div>
                <div class="mb-3">
                    <button type="button" id="experience_hide" class="btn btn-primary form-control" onclick="addExperience()">+</button>
                </div>
            </div><br><br>
            <input type="submit" class="form-control my-2">
        </form>
    </div>
    </div>
    <script src="app.js"></script>
</body>
</html>