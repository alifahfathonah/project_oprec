<script>
    function prodiChart() {
        var ctz = document.getElementById("prodiChart").getContext('2d');
        var prodiChart = new Chart(ctz, {
            type: 'doughnut',
            data: {
                labels: ["SI", "PTI", "MI",
                    "Ilkom"
                ],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        <?= $data['pendaftar']['si_prodi']; ?>,
                        <?= $data['pendaftar']['pti_prodi'] ?>,
                        <?= $data['pendaftar']['mi_prodi'] ?>,
                        <?= $data['pendaftar']['ilkom_prodi'] ?>
                    ],
                    backgroundColor: [
                        '#f1c40f',
                        '#3498db',
                        '#2ecc71',
                        '#e74c3c'
                    ],
                    borderColor: [
                        '#00000',
                        '#00000',
                        '#00000',
                        '#00000'
                    ],
                    borderWidth: 1
                }]
            },
            options: {

            }
        });
    }

    function semesterChart() {
        var ctz = document.getElementById("semesterChart").getContext('2d');
        var prodiChart = new Chart(ctz, {
            type: 'doughnut',
            data: {
                labels: ["Semester 2", "Semester 4"],
                datasets: [{
                    label: '# of Votes',
                    data: [ 
                        <?= $data['pendaftar']['dua_semester']; ?> , 
                        <?= $data['pendaftar']['empat_semester']; ?>
                    ],
                    backgroundColor: [
                        '#f1c40f',
                        '#3498db',
                        '#2ecc71',
                        '#e74c3c'
                    ],
                    borderColor: [
                        '#00000',
                        '#00000',
                        '#00000',
                        '#00000'
                    ],
                    borderWidth: 1
                }]
            },
            options: {

            }
        });
    }
semesterChart();
prodiChart();
</script>