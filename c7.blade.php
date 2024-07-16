<!-- <!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج معايير وأوزان ومحكمين ومشاريع</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 15px;
            background-color: #F7F7FA;
            width: auto;
            height: auto;
            min-width: 300px;
            min-height: 100px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 10px;
        }

        .form-group {
            flex: 1;
            margin: 5px;
        }

        label {
            display: block;
            text-align: right;
            font-weight: bold;
            margin-bottom: 5px;
            padding-right: 10px; /* يمكنك تعديل هذه القيمة لتحديد المسافة */
        }

        input[type="text"], input[type="number"] {
            background-color: white;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border-radius: 15px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: right;
            margin: auto;
        }

        .b2 {
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #383A6F;
            border-radius: 15px;
            width: auto;
            align-self: center;
            margin-top: 20px;
        }

        .b2:hover {
            background-color: white;
            color: #383A6F;
        }
        .add-button {
            background: url('c:/Users/USER/Pictures/add.png') no-repeat center center;
            background-size: cover; 
            width: 30px; 
            height: 30px; 
            border: none;
            cursor: pointer;
            /* margin-top: 70px;  */
            margin-top: 8%
            
        }
        
        .remove-button {
            background: url('minus-icon.png') no-repeat center center;
            background-size: cover;
            width: 30px;
            height: 30px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form id="dynamic-form">
   
        <div id="criteria-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="criterion">المعيار</label>
                    <input type="text" id="criterion" name="criterion">
                </div>
                <div class="form-group">
                    <label for="weight">وزن المعيار</label>
                    <input type="number" id="weight" name="weight">
                </div>
                <button type="button" class="add-button" onclick="addCriteria()">⊕</button>
            </div>
        </div>
        
        
        <div id="judges-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="judge">اسم المحكم</label>
                    <input type="text" id="judge" name="judge">
                </div>
                <button type="button" class="add-button" onclick="addJudge()">⊕</button>
            </div>
        </div>


        <div id="projects-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="project">اسم المشروع</label>
                    <input type="text" id="project" name="project">
                </div>
                <button type="button" class="add-button" onclick="addProject()">⊕</button>
            </div>
        </div>

        <button type="submit" class = "b2" >إرسال</button>
    </form>

    <script>
        function addCriteria() {
            const container = document.getElementById('criteria-container');
            const criteriaRow = document.createElement('div');
            criteriaRow.classList.add('form-row');
            criteriaRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="criterion" placeholder="">
                </div>
                <div class="form-group">
                    <input type="number" name="weight" placeholder="">
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(criteriaRow);
        }

        function addJudge() {
            const container = document.getElementById('judges-container');
            const judgeRow = document.createElement('div');
            judgeRow.classList.add('form-row');
            judgeRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="judge" placeholder=" ">
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(judgeRow);
        }

        function addProject() {
            const container = document.getElementById('projects-container');
            const projectRow = document.createElement('div');
            projectRow.classList.add('form-row');
            projectRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="project" placeholder=" ">
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(projectRow);
        }

        function removeElement(button) {
            button.parentElement.remove();
        }
    </script>
</body>
</html> -->
<!-- <!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج معايير وأوزان ومحكمين ومشاريع</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 15px;
            background-color: #F7F7FA;
            width: auto;
            height: auto;
            min-width: 300px;
            min-height: 100px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 10px;
        }

        .form-group {
            flex: 1;
            margin: 5px;
        }

        label {
            display: block;
            text-align: right;
            font-weight: bold;
            margin-bottom: 5px;
            padding-right: 10px; /* يمكنك تعديل هذه القيمة لتحديد المسافة */
        }

        input[type="text"], input[type="number"] {
            background-color: white;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border-radius: 15px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: right;
            margin: auto;
        }

        .b2 {
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #383A6F;
            border-radius: 15px;
            width: auto;
            align-self: center;
            margin-top: 20px;
        }

        .b2:hover {
            background-color: white;
            color: #383A6F;
        }

        .add-button {
            background: url('c:/Users/USER/Pictures/add.png') no-repeat center center;
            background-size: cover; 
            width: 30px; 
            height: 30px; 
            border: none;
            cursor: pointer;
            margin-top: 8%;
        }

        .remove-button {
            background: url('minus-icon.png') no-repeat center center;
            background-size: cover;
            width: 30px;
            height: 30px;
            border: none;
            cursor: pointer;
        }

        .error-message {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }

        .alert {
            padding: 15px;
            margin-top: 15px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }
    </style>
</head>
<body>
    <form id="dynamic-form">
        <div id="criteria-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="criterion">المعيار</label>
                    <input type="text" id="criterion" name="criterion">
                </div>
                <div class="form-group">
                    <label for="weight">وزن المعيار</label>
                    <input type="number" id="weight" name="weight" onchange="validateWeight(this)">
                </div>
                <button type="button" class="add-button" onclick="addCriteria()">⊕</button>
            </div>
        </div>

        <div id="judges-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="judge">اسم المحكم</label>
                    <input type="text" id="judge" name="judge">
                </div>
                <button type="button" class="add-button" onclick="addJudge()">⊕</button>
            </div>
        </div>

        <div id="projects-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="project">اسم المشروع</label>
                    <input type="text" id="project" name="project">
                </div>
                <button type="button" class="add-button" onclick="addProject()">⊕</button>
            </div>
        </div>

        <div id="error-message" class="alert alert-danger" style="display: none;">
            لا يمكنك إضافة المزيد من المعايير. مجموع الأوزان قد وصل إلى 100.
        </div>

        <button type="submit" class="b2">إرسال</button>
    </form>

    <script>
        function getTotalWeight() {
            const weights = document.querySelectorAll('input[name="weight"]');
            let totalWeight = 0;
            weights.forEach(weight => {
                totalWeight += parseFloat(weight.value) || 0;
            });
            return totalWeight;
        }

        function validateWeight(input) {
            const totalWeight = getTotalWeight();
            const errorMessage = document.getElementById('error-message');

            if (totalWeight > 100) {
                errorMessage.style.display = 'block';
                input.value = '';
            } else {
                errorMessage.style.display = 'none';
            }
        }

        function addCriteria() {
            const totalWeight = getTotalWeight();
            const errorMessage = document.getElementById('error-message');

            if (totalWeight >= 100) {
                errorMessage.style.display = 'block';
                return;
            }

            errorMessage.style.display = 'none';
            
            const container = document.getElementById('criteria-container');
            const criteriaRow = document.createElement('div');
            criteriaRow.classList.add('form-row');
            criteriaRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="criterion" placeholder="">
                </div>
                <div class="form-group">
                    <input type="number" name="weight" placeholder="" onchange="validateWeight(this)">
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(criteriaRow);
        }

        function addJudge() {
            const container = document.getElementById('judges-container');
            const judgeRow = document.createElement('div');
            judgeRow.classList.add('form-row');
            judgeRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="judge" placeholder=" ">
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(judgeRow);
        }

        function addProject() {
            const container = document.getElementById('projects-container');
            const projectRow = document.createElement('div');
            projectRow.classList.add('form-row');
            projectRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="project" placeholder=" ">
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(projectRow);
        }

        function removeElement(button) {
            button.parentElement.remove();
            const errorMessage = document.getElementById('error-message');
            const totalWeight = getTotalWeight();

            if (totalWeight <= 100) {
                errorMessage.style.display = 'none';
            }
        }
    </script>
</body>
</html> -->



<!-- <!DOCTYPE html>
<html lang="ar">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج معايير وأوزان ومحكمين ومشاريع</title>

    <style>
      
@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap');

        body {
            font-family:  "IBM Plex Sans Arabic", sans-serif;
            direction: rtl;
            text-align: center;
            background-color: #f0f0f0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 15px;
            background-color: #F7F7FA;
            width: auto;
            height: auto;
            min-width: 300px;
            min-height: 100px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 10px;
        }

        .form-group {
            flex: 1;
            margin: 5px;
        }

        label {
            display: block;
            text-align: right;
           
            margin-bottom: 5px;
            padding-right: 10px; /* يمكنك تعديل هذه القيمة لتحديد المسافة */
        }

        input[type="text"], input[type="number"] {
            background-color: white;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border-radius: 15px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: right;
            margin: auto;
        }

        .b2 {
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #383A6F;
            border-radius: 15px;
            width: auto;
            align-self: center;
            margin-top: 20px;
            font-family:  "IBM Plex Sans Arabic", sans-serif;
        }

        .b2:hover {
            background-color: white;
            color: #383A6F;
        }

        .add-button {
            background: url('c:/Users/USER/Pictures/add.png') no-repeat center center;
            background-size: cover; 
            width: 30px; 
            height: 30px; 
            border: none;
            cursor: pointer;
            margin-top: 8%;
        }

        .remove-button {
            background: url('minus-icon.png') no-repeat center center;
            background-size: cover;
            width: 30px;
            height: 30px;
            border: none;
            cursor: pointer;
        }

        .error-message {
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }

        .alert {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid transparent;
            border-radius: 8px;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;

        }
    </style>
</head>
<body>
    <form id="dynamic-form"   action="add" method="POST">
    @csrf
        <div id="error-message" class="alert alert-danger" style="display: none;">
            لا يمكنك إضافة المزيد من المعايير. مجموع الأوزان قد وصل إلى 100.
        </div>
        
        <div id="criteria-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="criterion">المعيار</label>
                    <input type="text" id="question" name="criterion">
                </div>
                <div class="form-group">
                    <label for="weight">وزن المعيار</label>
                    <input type="number" id="weight" name="weight" onchange="validateWeight(this)">
                </div>
                <button type="button" class="add-button" onclick="addCriteria()">⊕</button>
            </div>
        </div>

        <div id="judges-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="judge">اسم المحكم</label>
                    <input type="text" id="name" name="judge">
                </div>
                <button type="button" class="add-button" onclick="addJudge()">⊕</button>
            </div>
        </div>

        <div id="projects-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="project">اسم المشروع</label>
                    <input type="text" id="name_project" name="project">
                </div>
                <button type="button" class="add-button" onclick="addProject()">⊕</button>
            </div>
        </div>
        @csrf
        <button type="submit" class="b2">حفظ</button>
        <div id="error-message" class="alert alert-success" style="display: none;">
               .   تم ارسال البيانات بنجاح !!   .
        </div>
        
    </form>

    <script>
        function getTotalWeight() {
            const weights = document.querySelectorAll('input[name="weight"]');
            let totalWeight = 0;
            weights.forEach(weight => {
                totalWeight += parseFloat(weight.value) || 0;
            });
            return totalWeight;
        }

        function validateWeight(input) {
            const totalWeight = getTotalWeight();
            const errorMessage = document.getElementById('error-message');

            if (totalWeight > 100) {
                errorMessage.style.display = 'block';
                input.value = '';
            } else {
                errorMessage.style.display = 'none';
            }
        }

        function addCriteria() {
            const totalWeight = getTotalWeight();
            const errorMessage = document.getElementById('error-message');

            if (totalWeight >= 100) {
                errorMessage.style.display = 'block';
                return;
            }

            errorMessage.style.display = 'none';
            
            const container = document.getElementById('criteria-container');
            const criteriaRow = document.createElement('div');
            criteriaRow.classList.add('form-row');
            criteriaRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="criterion" placeholder="" id ="question">
                </div>
                <div class="form-group">
                    <input type="number" name="weight" placeholder="" onchange="validateWeight(this)" id = "weight">
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(criteriaRow);
        }

        function addJudge() {
            const container = document.getElementById('judges-container');
            const judgeRow = document.createElement('div');
            judgeRow.classList.add('form-row');
            judgeRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="judge" placeholder=" " id = "name">
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(judgeRow);
        }

        function addProject() {
            const container = document.getElementById('projects-container');
            const projectRow = document.createElement('div');
            projectRow.classList.add('form-row');
            projectRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="project" placeholder=" " id = "name_project>
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(projectRow);
        }

        function removeElement(button) {
            button.parentElement.remove();
            const errorMessage = document.getElementById('error-message');
            const totalWeight = getTotalWeight();

            if (totalWeight <= 100) {
                errorMessage.style.display = 'none';
            }
        }
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج معايير وأوزان ومحكمين ومشاريع</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap');

body {
    font-family:  "IBM Plex Sans Arabic", sans-serif;
    direction: rtl;
    text-align: center;
    background-color: #f0f0f0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    display: flex;
    flex-direction: column;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 15px;
    background-color: #F7F7FA;
    width: auto;
    height: auto;
    min-width: 300px;
    min-height: 100px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: auto;
}

.form-row {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-bottom: 10px;
}

.form-group {
    flex: 1;
    margin: 5px;
}

label {
    display: block;
    text-align: right;
   
    margin-bottom: 5px;
    padding-right: 10px; /* يمكنك تعديل هذه القيمة لتحديد المسافة */
}

input[type="text"], input[type="number"] {
    background-color: white;
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border-radius: 15px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: right;
    margin: auto;
}

.b2 {
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    transition-duration: 0.4s;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #383A6F;
    border-radius: 15px;
    width: auto;
    align-self: center;
    margin-top: 20px;
    font-family:  "IBM Plex Sans Arabic", sans-serif;
}

.b2:hover {
    background-color: white;
    color: #383A6F;
}

.add-button {
    background: url('c:/Users/USER/Pictures/add.png') no-repeat center center;
    background-size: cover; 
    width: 30px; 
    height: 30px; 
    border: none;
    cursor: pointer;
    margin-top: 8%;
}

.remove-button {
    background: url('minus-icon.png') no-repeat center center;
    background-size: cover;
    width: 30px;
    height: 30px;
    border: none;
    cursor: pointer;
}

.error-message {
    color: red;
    font-weight: bold;
    margin-top: 20px;
}

.alert {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid transparent;
    border-radius: 8px;
}

.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;

}
</style>
   
</head>
<body>

    <form id="dynamic-form" action="/add" method="POST"  onsubmit="return validateCriteria()">
        @csrf
        <div id="error-message" class="alert alert-danger" style="display: none;">
            لا يمكنك إضافة المزيد من المعايير. مجموع الأوزان قد وصل إلى 100.
        </div>
        
        <div id="criteria-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="question">المعيار</label>
                    <input type="text" id="question" name="question">
                </div>
                <div class="form-group">
                    <label for="weight">وزن المعيار</label>
                    <input type="number" id="weight" name="weight" onchange="validateWeight(this)">
                </div>
                <button type="button" class="add-button" onclick="addCriteria()">⊕</button>
            </div>
        </div>

        <div id="judges-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="name">اسم المحكم</label>
                    <input type="text" id="name" name="name">
                </div>
                <button type="button" class="add-button" onclick="addJudge()">⊕</button>
            </div>
        </div>

        <div id="projects-container">
            <div class="form-row">
                <div class="form-group">
                    <label for="name_project">اسم المشروع</label>
                    <input type="text" id="name_project" name="name_project">
                </div>
                <button type="button" class="add-button" onclick="addProject()">⊕</button>
            </div>
        </div>
        
        <button type="submit" class="b2">حفظ</button>
        <div id="error-message" class="alert alert-success" style="display: none;">
            تم ارسال البيانات بنجاح !!
        </div>
    </form>

    <script>
        function getTotalWeight() {
            const weights = document.querySelectorAll('input[name="weight"]');
            let totalWeight = 0;
            weights.forEach(weight => {
                totalWeight += parseFloat(weight.value) || 0;
            });
            return totalWeight;
        }

        function validateWeight(input) {
            const totalWeight = getTotalWeight();
            const errorMessage = document.getElementById('error-message');

            if (totalWeight > 100) {
                errorMessage.style.display = 'block';
                input.value = '';
            } else {
                errorMessage.style.display = 'none';
            }
        }

        function addCriteria() {
            const totalWeight = getTotalWeight();
            const errorMessage = document.getElementById('error-message');

            if (totalWeight >= 100) {
                errorMessage.style.display = 'block';
                return;
            }

            errorMessage.style.display = 'none';
            
            const container = document.getElementById('criteria-container');
            const criteriaRow = document.createElement('div');
            criteriaRow.classList.add('form-row');
            criteriaRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="question" placeholder="" id = "question">
                </div>
                <div class="form-group">
                    <input type="number" name="weight" placeholder=" "  id = "weight" onchange="validateWeight(this)">
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(criteriaRow);
        }

        function addJudge() {
            const container = document.getElementById('judges-container');
            const judgeRow = document.createElement('div');
            judgeRow.classList.add('form-row');
            judgeRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="name" id= "name" placeholder=" ">
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(judgeRow);
        }

        function addProject() {
            const container = document.getElementById('projects-container');
            const projectRow = document.createElement('div');
            projectRow.classList.add('form-row');
            projectRow.innerHTML = `
                <div class="form-group">
                    <input type="text" name="name_project" id = "name_project" placeholder=" ">
                </div>
                <button type="button" class="remove-button" onclick="removeElement(this)">⊖</button>
            `;
            container.appendChild(projectRow);
        }

        function removeElement(button) {
            button.parentElement.remove();
            const errorMessage = document.getElementById('error-message');
            const totalWeight = getTotalWeight();

            if (totalWeight <= 100) {
                errorMessage.style.display = 'none';
            }
        }
        function validateCriteria() {
            const weights = document.getElementsByName('weight[]');
            let totalWeight = 0;
            let error = '';

            for (let i = 0; i < weights.length; i++) {
                const weight = parseInt(weights[i].value);
                if (weight < 1 || weight > 100) {
                    errorMessage.style.display = 'block';
                    return;
                }
                totalWeight += weight;
            }

            if (totalWeight > 100) {
                errorMessage.style.display = 'block';
                return;
            }

            const errorMessage = document.getElementById('error-message');
            errorMessage.textContent = error;

            return error === '';
        }
        function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
    </script>
</body>
</html>

