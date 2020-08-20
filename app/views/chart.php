<script>
    function selBidangChart() {
        var ctx = document.getElementById("selBidangChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Bidang 1", "Bidang 2", "Bidang 3", "Bidang 4", "Bidang 5"],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        <?= $data['pendaftar']['se_bid1']; ?>,
                        <?= $data['pendaftar']['se_bid2']; ?>,
                        <?= $data['pendaftar']['se_bid3']; ?>,
                        <?= $data['pendaftar']['se_bid4']; ?>,
                        <?= $data['pendaftar']['se_bid5']; ?>
                    ],
                    backgroundColor: [
                        '#d2dae2',
                        '#f1c40f',
                        '#3498db',
                        '#2ecc71',
                        '#e74c3c'
                    ],
                    borderColor: [
                        '#00000',
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

    function utaBidangChart() {
        var ctx = document.getElementById("utaBidangChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Bidang 1", "Bidang 2", "Bidang 3", "Bidang 4", "Bidang 5"],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        <?= $data['pendaftar']['ut_bid1']; ?>,
                        <?= $data['pendaftar']['ut_bid2']; ?>,
                        <?= $data['pendaftar']['ut_bid3']; ?>,
                        <?= $data['pendaftar']['ut_bid4']; ?>,
                        <?= $data['pendaftar']['ut_bid5']; ?>
                    ],
                    backgroundColor: [
                        '#d2dae2',
                        '#f1c40f',
                        '#3498db',
                        '#2ecc71',
                        '#e74c3c'
                    ],
                    borderColor: [
                        '#00000',
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

    function opsBidangChart() {
        var ctx = document.getElementById("opsBidangChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Bidang 1", "Bidang 2", "Bidang 3", "Bidang 4", "Bidang 5"],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        <?= $data['pendaftar']['ops_bid1']; ?>,
                        <?= $data['pendaftar']['ops_bid2']; ?>,
                        <?= $data['pendaftar']['ops_bid3']; ?>,
                        <?= $data['pendaftar']['ops_bid4']; ?>,
                        <?= $data['pendaftar']['ops_bid5']; ?>
                    ],
                    backgroundColor: [
                        '#d2dae2',
                        '#f1c40f',
                        '#3498db',
                        '#2ecc71',
                        '#e74c3c'
                    ],
                    borderColor: [
                        '#00000',
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
                        <?= $data['pendaftar']['dua_semester']; ?>,
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

    // Wawancara
    function selBidangWaChart() {
        var ctx = document.getElementById("selBidangWaChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Bidang 1", "Bidang 2", "Bidang 3", "Bidang 4", "Bidang 5"],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        <?= $data['wawancara']['se_bid1']; ?>,
                        <?= $data['wawancara']['se_bid2']; ?>,
                        <?= $data['wawancara']['se_bid3']; ?>,
                        <?= $data['wawancara']['se_bid4']; ?>,
                        <?= $data['wawancara']['se_bid5']; ?>
                ],
                    backgroundColor: [
                        '#d2dae2',
                        '#f1c40f',
                        '#3498db',
                        '#2ecc71',
                        '#e74c3c'
                    ],
                    borderColor: [
                        '#00000',
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

    function prodiWaChart() {
        var ctz = document.getElementById("prodiWaChart").getContext('2d');
        var prodiChart = new Chart(ctz, {
            type: 'doughnut',
            data: {
                labels: ["Sistem Informasi", "Pendidikan Teknik Informatika", "Manajemen Informatika",
                    "Ilmu Komputer"
                ],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        <?= $data['wawancara']['si_prodi']; ?>,
                        <?= $data['wawancara']['pti_prodi'] ?>,
                        <?= $data['wawancara']['mi_prodi'] ?>,
                        <?= $data['wawancara']['ilkom_prodi'] ?>
                
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

    function semesterWaChart() {
        var ctz = document.getElementById("semesterWaChart").getContext('2d');
        var prodiChart = new Chart(ctz, {
            type: 'doughnut',
            data: {
                labels: ["Semester 2", "Semester 4"],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        <?= $data['wawancara']['dua_semester']; ?>,
                        <?= $data['wawancara']['empat_semester']; ?>
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
    // Run
    prodiChart();
    selBidangChart();
    utaBidangChart();
    opsBidangChart();
    semesterChart();
    prodiWaChart();
    selBidangWaChart();
    semesterWaChart();
</script>