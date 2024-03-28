export class DataService {
  presenceTab = [
    {
      id: 1,
      name: "Emmanuelle",
      status: "Présent",
    },
    {
      id: 2,
      name: "Robin",
      status: "Absent",
    },
    {
      id: 3,
      name: "Dominique",
      status: "Présent",
    },
  ];

  getStudent(id: number) {
    const students = this.presenceTab.find((s) => {
      return s.id === id;
    });
    return students;
  }
}
