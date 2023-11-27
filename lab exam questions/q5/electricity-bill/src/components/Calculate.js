import React, { useState } from 'react';

const Calculate = () => {
  const [unitsConsumed, setUnitsConsumed] = useState('');
  const [electricityBill, setElectricityBill] = useState(null);

  const calculateBill = () => {
    const units = parseFloat(unitsConsumed);

    if (isNaN(units)) {
      // Handle invalid input
      alert('Please enter a valid number for units consumed.');
      return;
    }

    let billAmount = 0;

    if (units <= 50) {
      billAmount = units * 3.5;
    } else if (units <= 150) {
      billAmount = 50 * 3.5 + (units - 50) * 4;
    } else if (units <= 250) {
      billAmount = 50 * 3.5 + 100 * 4 + (units - 150) * 5.2;
    } else {
      billAmount = 50 * 3.5 + 100 * 4 + 100 * 5.2 + (units - 250) * 6.5;
    }

    setElectricityBill(billAmount.toFixed(2));
  };

  return (
    <div>
      <h2>Electricity Bill Calculator</h2>
      <div>
        <label htmlFor="unitsInput">Enter Units Consumed:</label>
        <input
          type="text"
          id="unitsInput"
          value={unitsConsumed}
          onChange={(e) => setUnitsConsumed(e.target.value)}
        />
      </div>
      <button onClick={calculateBill}>Calculate Bill</button>

      {electricityBill !== null && (
        <div>
          <h3>Your Electricity Bill:</h3>
          <p>{`Rs. ${electricityBill}`}</p>
        </div>
      )}
    </div>
  );
};

export default Calculate;
