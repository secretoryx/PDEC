<?php
$students = [
    [
        'rollNo' => 1,
        'registrationNo' => '2023104',
        'name' => 'ABDUL KHALIQ',
        'fatherName' => 'SAEED JAN',
        'course' => 'PHARMACY TECHNICIAN',
        'duration' => '2 Years',
        'session' => '2019-2021',
        'totalMarks' => 2000,
        'obtainedMarks' => 1698,
        'grade' => 'A'
    ],
    // Add more student data here
];

// Check if the rollNo parameter exists in the POST request
if (isset($_POST['rollNo'])) {
    $rollNo = $_POST['rollNo'];

    // Search for the student with the provided roll number
    foreach ($students as $student) {
        if ($student['rollNo'] == $rollNo) {
            // If found, display the student result
            $resultHtml = "
                <h2>VERIFICATION RESULT</h2>
                <p>It is to verify that the Diploma/Certificate issued in favor of Mr/Miss <strong>" . $student['name'] . "</strong> S/D/O <strong>" . $student['fatherName'] . "</strong>, vide Roll No: <strong>" . $student['rollNo'] . "</strong> with Registration No: <strong>" . $student['registrationNo'] . "</strong> trained and evaluated by <strong> INSTITUTE OF TECHNICAL AND PROFESSIONAL EDUCATION ISLAMABAD </strong> in the trade of <strong>" . $student['course'] . "</strong> is found genuine according to our office record with the following transcript.</p>
                <h2>TRANSCRIPT DETAILS</h2>
                <p>Total Marks: <strong>" . $student['totalMarks'] . "</strong></p>
                <p>Marks Obtained: <strong>" . $student['obtainedMarks'] . "</strong></p>
                <p>Grade: <strong>" . $student['grade'] . "</strong></p>
                <p>Session: <strong>" . $student['session'] . "</strong></p>
                <p>Duration: <strong>" . $student['duration'] . "</strong></p>
            ";

            echo $resultHtml;
            exit;
        }
    }

    // If no student is found, display an error message
    echo "Student not found.";
    exit;
}
?>
