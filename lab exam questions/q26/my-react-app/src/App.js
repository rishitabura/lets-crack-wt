// import logo from './logo.svg';
// import './App.css';

// function App() {
//   return (
//     <div className="App">
//       <header className="App-header">
//         <img src={logo} className="App-logo" alt="logo" />
//         <p>
//           Edit <code>src/App.js</code> and save to reload.
//         </p>
//         <a
//           className="App-link"
//           href="https://reactjs.org"
//           target="_blank"
//           rel="noopener noreferrer"
//         >
//           Learn React
//         </a>
//       </header>
//     </div>
//   );
// }

// export default App;

// src/App.js
import React, { useState } from 'react';

function App() {
  const [amount, setAmount] = useState(1);
  const [fromCurrency, setFromCurrency] = useState('USD');
  const [toCurrency, setToCurrency] = useState('EUR');
  const [convertedAmount, setConvertedAmount] = useState(null);

  const exchangeRates = {
    USD: 1,
    EUR: 0.85,
    GBP: 0.73,
    INR: 74.58,
    // Add more currency exchange rates as needed
  };

  const convertCurrency = () => {
    if (!exchangeRates[fromCurrency] || !exchangeRates[toCurrency]) {
      alert('Invalid currency selection');
      return;
    }

    const result = (amount / exchangeRates[fromCurrency]) * exchangeRates[toCurrency];
    setConvertedAmount(result.toFixed(2));
  };

  return (
    <div>
      <h2>Currency Converter</h2>
      <div>
        <label>Amount:</label>
        <input type="number" value={amount} onChange={(e) => setAmount(e.target.value)} />
      </div>
      <div>
        <label>From Currency:</label>
        <select value={fromCurrency} onChange={(e) => setFromCurrency(e.target.value)}>
          {Object.keys(exchangeRates).map((currency) => (
            <option key={currency} value={currency}>
              {currency}
            </option>
          ))}
        </select>
      </div>
      <div>
        <label>To Currency:</label>
        <select value={toCurrency} onChange={(e) => setToCurrency(e.target.value)}>
          {Object.keys(exchangeRates).map((currency) => (
            <option key={currency} value={currency}>
              {currency}
            </option>
          ))}
        </select>
      </div>
      <div>
        <button onClick={convertCurrency}>Convert</button>
      </div>
      {convertedAmount !== null && (
        <div>
          <h3>Result:</h3>
          <p>
            {amount} {fromCurrency} is equal to {convertedAmount} {toCurrency}
          </p>
        </div>
      )}
    </div>
  );
}

export default App;
