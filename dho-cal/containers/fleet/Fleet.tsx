'use client';

import { useEffect, useState } from 'react';

import Button from '@/components/Button';

import ShipItem from './ShipItem';
import { ShipItemProps } from './ShipItemProps';

import { createShipItem } from './main';

import styles from './fleet.module.css';

export default function Fleet() {
  const [lastIndex, setLastIndex] = useState<number>(0);
  const [useShips, setUseShips] = useState<ShipItemProps[]>([]);

  useEffect(() => {
    setUseShips([createShipItem({ name: '1번 선박' })]);
    setLastIndex(1);
  }, []);

  useEffect(() => {
    console.log(useShips);
  }, [useShips]);

  const addUseShip = () => {
    setUseShips((prev) => [
      ...prev,
      createShipItem({ name: `${lastIndex + 1}번 선박` }),
    ]);

    setLastIndex((prev) => prev + 1);
  };

  const changeShipItem = (shipItem: ShipItemProps, index: number) => {
    const newUseShips = [...useShips];

    if (shipItem.isDelete) {
      newUseShips.splice(index, 1);
    } else {
      newUseShips[index] = shipItem;
    }

    setUseShips(newUseShips);
  };

  return (
    <div className={`${styles.wrap}`}>
      <ul className={`${styles.list}`}>
        {useShips.map((item, index) => (
          <ShipItem
            key={index}
            index={index}
            option={item}
            onChange={changeShipItem}
          />
        ))}
        <li className={`${styles.item} ${styles.add}`}>
          <Button onClick={addUseShip}>선박 추가</Button>
        </li>
      </ul>
    </div>
  );
}
