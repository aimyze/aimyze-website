<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.15.0/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.15.0/dist/sweetalert2.min.css
" rel="stylesheet">

<script>
    function sw_alert(title1, text1, icon1 = "success", btntext="Okay!") {
        Swal.fire({
            title: title1,
            html: text1,
            icon: icon1,
            iconColor: '#20618f',
            showCancelButton: false,
            confirmButtonColor: "#20618f",
            cancelButtonColor: "#d33",
            confirmButtonText: btntext
        }).then((result) => {
            if (result.isConfirmed) {
                history.go(-1);
                /*
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                */
            }
        });
    }
</script>