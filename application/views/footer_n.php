</div>
    <!--   Core   -->
    <script src="<?php echo base_url('assets/js/plugins/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <!--   Argon JS   -->
    <script src="<?php echo base_url('assets/js/argon-dashboard.min.js?v=1.1.0'); ?>"></script>

    <script>
        $(document).ready(function(){
            // console.log('save')
        });

        $(document).on('click','#can_delete',function(e){
            e.preventDefault();
            window.location.reload();
        });

        $(document).on('click','#add_save',function(e){
            e.preventDefault();
            $.ajax({
                type:'post',
                url:"<?php echo base_url('insert'); ?>",
                data:$('#form_save_incription').serialize(),
                cache:false,
                beforeSend:function(){
                    $(this).attr('disabled','disabled');
                },
                success:function(data){
                    // console.log(data)
                    if(data){
                        window.location.reload();
                    }else{
                        console.log('error')
                    }
                },
                error:function(resp){

                },
                complete:function(resp){
                    $(this).removeAttr('disabled');
                }

            });
        });
    </script>
</body>

</html>