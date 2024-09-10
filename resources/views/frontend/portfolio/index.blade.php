<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quill Editor Example</title>
    <!-- Include Quill CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<body>
    
    <button id="saveButton">Save Content</button>
    <div id="editor" style="height: 500px;">


    

    </div>
   

    <!-- Include Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Quill editor
            var quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{ header: [1, 2, false] }],
                        ['bold', 'italic', 'underline'],
                        [{ list: 'ordered' }, { list: 'bullet' }],
                        ['link', 'image']
                    ]
                }
            });

            // Save button event listener
            document.getElementById('saveButton').addEventListener('click', function() {
                var content = quill.getContents();
                console.log('Content saved: ', content);

                // Send data to your backend
                fetch('/save-content', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ content: content }),
                }).then(response => response.json())
                  .then(data => console.log('Server response:', data))
                  .catch(error => console.error('Error:', error));
            });
        });
    </script>
</body>
</html>
