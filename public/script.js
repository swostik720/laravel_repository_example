document.addEventListener('DOMContentLoaded', function () {
    // All Categories Page
    if (document.getElementById('categoryList')) {
        // You can fetch categories here if needed
    }

    // Add Category Page
    if (document.getElementById('addCategoryForm')) {
        const addCategoryForm = document.getElementById('addCategoryForm');
        addCategoryForm.addEventListener('submit', function (event) {
            event.preventDefault();
            saveCategory();
        });
    }

    // Edit Category Page
    if (document.getElementById('editCategoryForm')) {
        const editCategoryForm = document.getElementById('editCategoryForm');
        editCategoryForm.addEventListener('submit', function (event) {
            event.preventDefault();
            saveEditedCategory();
        });
    }

    function saveCategory() {
        const categoryName = document.getElementById('categoryName').value.trim();
        if (categoryName) {
            // Perform your form submission or redirect here
            alert(`Category "${categoryName}" added successfully!`);
        } else {
            alert('Please enter a category name.');
        }
    }

    function saveEditedCategory() {
        const categoryName = document.getElementById('categoryName').value.trim();
        if (categoryName) {
            // Perform your form submission or redirect here
            alert(`Category "${categoryName}" updated successfully!`);
        } else {
            alert('Please enter a category name.');
        }
    }

    function deleteCategory() {
        if (confirm('Are you sure you want to delete this category?')) {
            // Perform your form submission or redirect here
            alert('Category deleted successfully!');
        }
    }
});
