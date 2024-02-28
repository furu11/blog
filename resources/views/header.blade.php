

<heads>
  <nav class>
    <div class= "logo">
 
    </div>
    <div class= "g_nav">
        <a href="contact.blade.php">新規投稿</a>
        <a href="{{ route('logout') }}">ログアウト</a>
       
        </a>

      </div>
  
      <div class="sign">
    <div class="signin _click" onclick="goToMyPage()">マイページ</div>
      </div>
     

<script>
    function goToMyPage() {
        window.location.href = "{{ route('views.mypage') }}";
    }
</script>


  </nav>

</heads>
