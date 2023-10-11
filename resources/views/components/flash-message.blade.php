
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@if(session('message'))
<div class="alert-message">
    <p>{{ session('message') }}</p>
    
</div>

<script>
    $(document).ready(function() {
        $(".alert-message").delay(2000).fadeOut("slow");
    });
</script>
    
@endif
<style>
    .alert-message {
        position: fixed;
        top: 10%;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        display: flex;
        justify-content: center;
        background-color: #50ff50f9;
        color: rgba(8, 6, 6, 0.982);
        padding: 10px 40px;
        font-weight: bold;
        border-radius: 20px;
        
    }
</style>