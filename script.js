document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    var rollNo = document.getElementById('rollNo').value;
    var resultContainer = document.getElementById('resultContainer');

    // Display loader
    resultContainer.innerHTML = '<div class="loader"></div>';
    resultContainer.style.display = 'block';

    fetch('result.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'rollNo=' + encodeURIComponent(rollNo),
    })
    .then(function(response) {
        return response.text();
    })
    .then(function(data) {
        if (data.includes('Student not found')) {
            resultContainer.innerHTML = '<p>Student not found.</p>';
        } else {
            resultContainer.innerHTML = data;
        }
    })
    .catch(function(error) {
        console.log('Error:', error);
    })
    .finally(function() {
        // Hide loader
        resultContainer.style.display = 'block';
    });
});
