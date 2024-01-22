<button class="copy-btn">Copy</button>

<!-- The input field that contains the text you want to copy -->
<input type="text" value="{{ $details }}" id="myInput" readonly>

<script>
    // Using plain JavaScript
    document.querySelector('.copy-btn').addEventListener('click', function() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices
        document.execCommand("copy");
        alert("Copied the text: " + copyText.value);
    });
</script>