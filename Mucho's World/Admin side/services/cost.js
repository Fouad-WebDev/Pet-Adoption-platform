document.addEventListener("DOMContentLoaded", function() {
    const serviceCheckboxes = document.querySelectorAll(".service");
    const totalCostElement = document.getElementById("totalCost");
    const totalCostInput = document.getElementById("totalCostInput");
    const discountInput = document.getElementById("discount");
  
    // Function to calculate the total cost based on selected services and apply the discount
    function calculateTotalCost() {
      let totalCost = 0;
      serviceCheckboxes.forEach(checkbox => {
        if (checkbox.checked) {
          totalCost += parseInt(checkbox.getAttribute("data-cost"));
        }
      });
  
      // Apply the discount (if any)
      const discount = parseFloat(discountInput.value);
      if (!isNaN(discount) && discount >= 0 && discount <= 100) {
        totalCost *= (100 - discount) / 100;
      }
  
      totalCostElement.textContent = `$${totalCost.toFixed(2)}`;
  
      // Update the hidden input field with the total cost
      totalCostInput.value = totalCost.toFixed(2);
    }
  
    // Event listeners to update the cost when a checkbox or discount input changes
    serviceCheckboxes.forEach(checkbox => {
      checkbox.addEventListener("change", calculateTotalCost);
    });
  
    discountInput.addEventListener("input", calculateTotalCost);
  });
  