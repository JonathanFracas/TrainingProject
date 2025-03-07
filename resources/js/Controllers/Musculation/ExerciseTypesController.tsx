import BodyPartType, {RawBodyPartType} from "@/Models/Musculation/BodyPartType";
import axios from "axios";
import ExerciseType, {RawExerciseType} from "@/Models/Musculation/ExerciseType";


export default class ExerciseTypesController
{

	public static async get(): Promise<ExerciseType[]>
	{
		let exerciseTypes: ExerciseType[] = [];
		const response = await axios.get<RawExerciseType[]>(`/api/exerciseTypes/get/`);

		response.data.forEach((exerciseType) => {
			exerciseTypes.push((new ExerciseType()).parse(exerciseType));
		});

		return exerciseTypes;
	}
}
