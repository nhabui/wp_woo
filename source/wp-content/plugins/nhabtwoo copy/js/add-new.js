jQuery(document).ready(function($) {
    // Counter to keep track of the form number
    var counter = 1;

    // Event listener for the "Add New" button
    $('#add-new-form-button').on('click', function(e) {
        e.preventDefault();
        // Call the function to add 10 forms
        addMultipleForms(10);
    });

    // Function to add multiple forms
    function addMultipleForms(numForms) {
        // Loop to add specified number of forms
        for (var i = 0; i < numForms; i++) {
            addNewForm();
        }
    }

    // Function to add a new form
    function addNewForm() {
        // Create a new form with a unique identifier
        var newForm = '<form id="custom-form-' + counter + '">';
        newForm += '<label for="category_slug">Default Category:</label>';
        newForm += '<select name="category_slug" id="category_slug">';
        // Add your category options here
        newForm += '</select>';
        newForm += '<label for="products_per_page">Products Per Page:</label>';
        newForm += '<input type="number" name="products_per_page" id="products_per_page" min="1">';
        newForm += '<button class="button-primary" type="submit" name="custom_products_settings_submit">Save Settings</button>';
        newForm += '</form>';

        // Append the new form to the container
        $('#custom-products-forms-container').append(newForm);

        // Increment the counter
        counter++;
    }
});
