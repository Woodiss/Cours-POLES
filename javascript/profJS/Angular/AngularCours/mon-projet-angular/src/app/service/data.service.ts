export class DataService {

  presenceTabService = [
    {
      name: 'Mickael',
      status: 'Présent'
    },
    {
      name: 'Adrienne',
      status: 'Absent'
    },
    {
      name: 'Adrien',
      status: 'Présent'
    }
  ]


  getstudent(id: number) {
    const students = this.presenceTab.find((s) => {
      return s.id == id;
    });
    return students;
  }
}

