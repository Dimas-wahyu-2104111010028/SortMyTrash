import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import React from 'react';
import '../App.css';
import Home from './home';
import Sort from './sort';

function App() {
  return (
    <Router>
      <Routes>
        <Route path='/' element={<Home />} />
        <Route path='/sortir' element={<Sort />} />
      </Routes>
    </Router>
  );
}

export default App;