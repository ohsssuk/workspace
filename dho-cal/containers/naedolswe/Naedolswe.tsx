'use client';

import { useEffect, useState } from 'react';

import ShipItem from './ShipItem';
import { ShipItemProps } from './ShipItemProps';

import styles from './naedolswe.module.css';

export default function Naedolswe() {
  const [useShips, setUseShips] = useState<ShipItemProps[]>([]);

  useEffect(() => {
    setUseShips([
      { name: '', type: '타입' },
      { name: '', type: '타입' },
      { name: '3선', type: '타입' },
      { name: '3선', type: '타입' },
    ]);
  }, []);

  const addUseShip = () => {
    setUseShips((prev) => [...prev, { name: '새로운선', type: '타입' }]);
  };

  return (
    <div className={styles.wrap}>
      <ul className={styles.list}>
        {useShips.map((item, index) => (
          <ShipItem key={index} index={index} option={item} />
        ))}
        <li className={`${styles.item} ${styles.add}`}>
          <button onClick={addUseShip}>선박 추가</button>
        </li>
      </ul>
    </div>
  );
}
