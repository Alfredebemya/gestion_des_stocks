  // Simple JavaScript to toggle mobile menu
  document.getElementById('menu-toggle').addEventListener('click', function() {
    document.getElementById('nav-list').classList.toggle('show');
});

// For demo purposes only - modal toggle
// In a real implementation, you would need more advanced modal handling
// This is just to show the structure
const modalDemo = {
    open: function() {
        document.getElementById('example-modal').style.display = 'flex';
    },
    close: function() {
        document.getElementById('example-modal').style.display = 'none';
    }
    };
    
    // Add event listeners for modal buttons
    document.querySelector('.modal-close').addEventListener('click', function() {
        modalDemo.close();
    });
    
    // Example of opening modal from a button
    document.querySelector('.card-header .btn-primary').addEventListener('click', function() {
        modalDemo.open();
    });
    
    // Close modal when clicking outside
    document.getElementById('example-modal').addEventListener('click', function(e) {
        if (e.target === this) {
            modalDemo.close();
        }
    });
    
    // Form validation example
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your validation logic here
            console.log('Form submitted');
            // If successful, close modal
            modalDemo.close();
        });
    });
    
    // Price calculation for orders
    function calculateOrderTotal() {
        // This would be expanded in a real application
        const product = document.querySelector('select').value;
        const quantity = document.querySelector('input[type="number"]').value;
        
        // Sample price mapping (in real app, would be fetched from database)
        const prices = {
            'Poulets de chair': 3750,
            'Poussins': 1500,
            'Provende démarrage': 15000,
            'Provende croissance': 14500
        };
        
        if (product in prices && quantity > 0) {
            return prices[product] * quantity;
        }
        return 0;
    }
    
    // Toggle sidebar on mobile
    const toggleSidebar = function() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('show-mobile');
    };
    
    // Stock alert handling
    function checkLowStock() {
        const lowStockThreshold = 15;
        const stockLevels = document.querySelectorAll('td.text-danger, td.text-warning');
        
        if (stockLevels.length > 0) {
            console.log('Low stock items detected');
            // Alert admin or highlight in UI
        }
    }
    
    // Run initial checks
    window.addEventListener('DOMContentLoaded', function() {
        checkLowStock();
    });
    
    // Add datepicker functionality (would require external library in real implementation)
    const dateInputs = document.querySelectorAll('input[type="date"]');
    if (dateInputs.length > 0) {
        // Initialize datepicker
        console.log('Datepicker would be initialized here');
    }
    
    // Print functionality for receipts
    const printButtons = document.querySelectorAll('.btn-warning .fa-print');
    printButtons.forEach(button => {
        button.parentElement.addEventListener('click', function() {
            console.log('Print receipt');
            // In real implementation, would open print dialog with receipt
            window.alert('Impression du reçu en cours...');
        });
    });
    
    // View order details
    const viewButtons = document.querySelectorAll('.btn-info .fa-eye');
    viewButtons.forEach(button => {
        button.parentElement.addEventListener('click', function() {
            console.log('View order details');
            // In real implementation, would show order details
            modalDemo.open();
        });
    });