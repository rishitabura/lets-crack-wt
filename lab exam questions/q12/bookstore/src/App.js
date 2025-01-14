import React, { useState } from 'react';
import { BrowserRouter as Router, Route, Redirect, Switch } from 'react-router-dom';
import Home from '../src/components/Home';
import Catalog from '../src/components/Catalog';
import Login from '../src/components/Login';
import Registration from '../src/components/Registration';

function App() {
  const [user, setUser] = useState(null);

  return (
    <Router>
      <Switch>
        <Route path="/login" render={(props) => <Login setUser={setUser} {...props} />} />
        <Route
          path="/home"
          render={() => (user ? <Home user={user} /> : <Redirect to="/login" />)}
        />
        <Route
          path="/catalog"
          render={() => (user ? <Catalog /> : <Redirect to="/login" />)}
        />
        <Route path="/register" component={Registration} />
        <Redirect from="/" to="/login" />
      </Switch>
    </Router>
  );
}

export default App;
