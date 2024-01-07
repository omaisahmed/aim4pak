<footer class="main-footer">
    <div class="justify-content-center text-center mx-auto">
      <strong>Copyright &copy; <span id="currentYear"></span> <a href="https://omaisahmed.github.io/folio/">Omais Ahmed</a>.</strong> {{ __('common.all_reserved') }}
    </div>
  </footer>

  <script>
    const currentYear = new Date().getFullYear();
    document.getElementById("currentYear").textContent = currentYear;
</script>