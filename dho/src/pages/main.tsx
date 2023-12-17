import React, { useState, useEffect, useRef } from 'react';
import Button from '../components/Button';

import Item from '../components/ship/item';
import List from '../components/ship/List';
import Container from '../components/Container';

function Main() {
  const liRefs = useRef(Array.from({ length: 7 }, () => React.createRef<HTMLLIElement>()));

  const handleClickResult = () => {
    console.log('result');

    liRefs.current.forEach((ref, index) => {
      const itemInputs = ref.current?.querySelectorAll(`input`);

      itemInputs?.forEach((element) => {
        console.log(element.name, ":", element.value);
      });
    });
  };
  
  return (
    <Container>
      <List>
        {liRefs.current.map((ref, index) => (
          <Item key={index} itemRef={ref} />
        ))}
      </List>

      <div style={{marginTop: '20px'}}>
        <Button onClick={handleClickResult}>확인</Button>
      </div>
    </Container>
  );
}

export default Main;
