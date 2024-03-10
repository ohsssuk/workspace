'use client';

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPlus } from '@fortawesome/free-solid-svg-icons';

import { ReactNode, useEffect, useState } from 'react';

import Button from '@/components/Button';

import { ShipItemProps, StatRowProps } from './item/ShipProps';

import { createShipItem } from './main';

import styles from './fleet.module.css';
import CommonSection from '@/components/CommonSection';
import ShipItemList from './ShipItemList';
import Select from '@/components/Select';
import { statRow } from './data';

export default function Fleet() {
  const [isInit, setIsInit] = useState<boolean>(false);
  const [lastIndex, setLastIndex] = useState<number>(0);

  const [useShips, setUseShips] = useState<ShipItemProps[]>([]);
  const [useArmors, setUseArmors] = useState<ShipItemProps[]>([]);
  const [useRams, setUseRams] = useState<ShipItemProps[]>([]);
  const [useAnchor, setUseAnchor] = useState<ShipItemProps[]>([]);

  useEffect(() => {
    setUseShips([createShipItem({ name: '1번 선박', kind: 'ship' })]);
    setUseArmors([createShipItem({ name: '장갑', kind: 'armor' })]);
    setLastIndex(1);
    setIsInit(true);
  }, []);

  useEffect(() => {
    console.log(useShips, useArmors);
  }, [useShips, useArmors, useRams, useAnchor]);

  const getUseItem = (kind: ShipItemProps['kind']) => {
    let newUseItem: ShipItemProps[];
    let setUseItem: (newValue: ShipItemProps[]) => void;
    let korLang: string = '';

    switch (kind) {
      case 'armor':
        newUseItem = [...useArmors];
        setUseItem = setUseArmors;
        korLang = '장갑';
        break;
      case 'ram':
        newUseItem = [...useRams];
        setUseItem = setUseRams;
        korLang = '충각';
        break;
      case 'anchor':
        newUseItem = [...useAnchor];
        setUseItem = setUseAnchor;
        korLang = '닻';
        break;
      default:
        newUseItem = [...useShips];
        setUseItem = setUseShips;
        break;
    }

    return { newUseItem, setUseItem, korLang };
  };

  const addUseItem = (kind: ShipItemProps['kind']) => {
    const { newUseItem, setUseItem, korLang } = getUseItem(kind);

    let createItem;
    if (kind === 'ship') {
      createItem = createShipItem({
        name: `${lastIndex + 1}번 선박`,
        kind,
      });
      setLastIndex((prev) => prev + 1);
    } else {
      createItem = createShipItem({
        name: korLang,
        kind,
      });
    }

    newUseItem.push(createItem);

    setUseItem(newUseItem);
  };

  const changeUseItem = (shipItem: ShipItemProps, index: number) => {
    const { newUseItem, setUseItem } = getUseItem(shipItem.kind);

    if (shipItem.isDelete) {
      newUseItem.splice(index, 1);
    } else {
      newUseItem[index] = shipItem;
    }

    setUseItem(newUseItem);
  };

  const getSortOptionFromStatRow = (statRow: StatRowProps[]) => {
    const newData = statRow.map((stat: StatRowProps) => ({
      content: stat.kor,
      value: stat.val,
    }));

    return [
      {
        content: '정렬',
        value: '',
      },
      ...newData,
    ];
  };

  if (!isInit) {
    return null;
  }

  return (
    <>
      <CommonSection title="선박 입력">
        <ShipItemList
          useItem={useShips}
          addUseItem={addUseItem}
          changeUseItem={changeUseItem}
          kind="ship"
        />
      </CommonSection>

      <CommonSection title="장갑 입력">
        <ShipItemList
          useItem={useArmors}
          addUseItem={addUseItem}
          changeUseItem={changeUseItem}
          kind="armor"
        />
      </CommonSection>

      <CommonSection title="충각 입력">
        <div className="flex justify-end py-1 px-2">
          <Select
            options={getSortOptionFromStatRow(statRow.ram)}
            selectedValue={''}
            onSelect={() => {}}
          />
        </div>

        <ShipItemList
          useItem={useRams}
          addUseItem={addUseItem}
          changeUseItem={changeUseItem}
          kind="ram"
        />
      </CommonSection>

      <CommonSection title="닻 입력">
        <ShipItemList
          useItem={useAnchor}
          addUseItem={addUseItem}
          changeUseItem={changeUseItem}
          kind="anchor"
        />
      </CommonSection>
    </>
  );
}
