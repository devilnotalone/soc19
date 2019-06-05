<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{-- <script type="text/javascript" src="{{ url('/') }}/js/init.js"></script> --}}
<script type="text/javascript" src="{{ url('/') }}/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/popper.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/js/app.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.3/js/jquery.orgchart.min.js">
</script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.3/js/jquery.orgchart.min.js.map"></script>
</script>
<script type="text/javascript">
    $(function () {

        var datascource = {
            'name': 'อธิการบดี',
            'children': [
                {
                    'name': 'คณกรรมการประจำสำนัก',
                },
                {
                    'name': 'คณบดี',
                    'children': [{
                            'name': 'รองคณบดีรับผิดชอบงานวิจัยและงานสร้างสรรค์'
                        },
                        {
                            'name': 'รองคณบดีรับผิดชอบงานวิจัยและงานสร้างสรรค์'

                        },
                        {
                            'name': 'รองคณบดีรับผิดชอบงานผลิตบัณฑิตและทำนุบำรุงศิลปวัฒนธรรม'
                        }
                    ]
                },
                {
                    'name': 'คณะกรรมการบริหารสำนัก'
                }
            ]
        };

        var oc = $('#chart-container').orgchart({
            'data': datascource,
            'pan': true,
            'zoom': true
        });

        oc.$chartContainer.on('touchmove', function (event) {
            event.preventDefault();
        });

    });

</script>

</body>

</html>
