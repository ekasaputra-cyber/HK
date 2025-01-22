<script src="https://cdn.tiny.cloud/1/38o7vdmn40l09swvi0t8sdiz7vytie0omx3dma1uv3zrhi4t/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
      selector: '#content',
      height: 300,
      menubar: false,
      plugins: ['link', 'image', 'lists'],
      toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image',
      setup: function(editor) {
          editor.on('change', function() {
              tinymce.activeEditor.save();  // Pastikan perubahan disimpan ke textarea
          });
      }
  });
</script>
